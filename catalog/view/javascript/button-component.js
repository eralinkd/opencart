/**
 * Нативный HTML компонент кнопки с использованием template и slot
 * 
 * Использование:
 * <custom-button type="primary" text="Добавить"></custom-button>
 * 
 * Или с слотами:
 * <custom-button type="primary">
 *   <span slot="icon"><i class="fa-solid fa-plus"></i></span>
 *   <span slot="text">Добавить</span>
 * </custom-button>
 * 
 * Требует наличия <template id="custom-button-template"> в HTML
 */

// Проверяем, не зарегистрирован ли уже компонент
if (!customElements.get('custom-button')) {
  class CustomButton extends HTMLElement {
    constructor() {
      super();

      // Получаем шаблон
      const template = document.getElementById('custom-button-template');
      if (!template) {
        console.error('Template "custom-button-template" not found');
        return;
      }

      // Создаем Shadow DOM
      const shadowRoot = this.attachShadow({ mode: 'open' });
      shadowRoot.appendChild(template.content.cloneNode(true));

      // Получаем ссылку на кнопку
      this.button = shadowRoot.querySelector('.custom-button');
    }

    // Отслеживаем изменения атрибутов
    static get observedAttributes() {
      return ['type', 'disabled', 'href', 'text', 'tooltip', 'onclick'];
    }

    // Вызывается при изменении атрибутов
    attributeChangedCallback(name, oldValue, newValue) {
      if (oldValue === newValue) return;

      this.updateButton();
    }

    // Вызывается при добавлении элемента в DOM
    connectedCallback() {
      this.updateButton();
      this.setupEventListeners();
    }

    // Вызывается при удалении элемента из DOM
    disconnectedCallback() {
      // Очистка при необходимости
    }

    updateButton() {
      if (!this.button) return;

      // Устанавливаем тип кнопки
      const type = this.getAttribute('type') || 'primary';
      this.button.className = `custom-button custom-button-${type}`;

      // Устанавливаем disabled
      if (this.hasAttribute('disabled')) {
        this.button.disabled = true;
        this.button.setAttribute('aria-disabled', 'true');
      } else {
        this.button.disabled = false;
        this.button.removeAttribute('aria-disabled');
      }

      // Устанавливаем tooltip
      const tooltip = this.getAttribute('tooltip');
      if (tooltip) {
        this.button.title = tooltip;
      } else {
        this.button.removeAttribute('title');
      }

      // Если есть атрибут text, обновляем слот
      const textAttr = this.getAttribute('text');
      if (textAttr) {
        const textSlot = this.shadowRoot.querySelector('slot[name="text"]');
        if (textSlot) {
          // Если в слоте нет контента, устанавливаем текст
          if (!textSlot.assignedNodes().length) {
            textSlot.textContent = textAttr;
          }
        }
      }

      // Если есть href, превращаем в ссылку
      const href = this.getAttribute('href');
      if (href && this.button.tagName === 'BUTTON') {
        const link = document.createElement('a');
        link.href = href;
        link.className = this.button.className;
        link.innerHTML = this.button.innerHTML;

        // Копируем атрибуты
        if (this.button.disabled) {
          link.setAttribute('aria-disabled', 'true');
        }
        if (tooltip) {
          link.title = tooltip;
        }

        this.button.parentNode.replaceChild(link, this.button);
        this.button = link;
      }
    }

    setupEventListeners() {
      if (!this.button) return;

      // Обработчик onclick из атрибута
      const onclickAttr = this.getAttribute('onclick');
      if (onclickAttr) {
        this.button.addEventListener('click', (e) => {
          // Выполняем код из атрибута onclick
          try {
            new Function('event', onclickAttr)(e);
          } catch (error) {
            console.error('Error executing onclick:', error);
          }
        });
      }

      // Проксируем событие click наружу
      this.button.addEventListener('click', (e) => {
        if (this.button.disabled || this.button.getAttribute('aria-disabled') === 'true') {
          e.preventDefault();
          e.stopPropagation();
          return;
        }

        // Создаем кастомное событие
        this.dispatchEvent(new CustomEvent('button-click', {
          detail: {
            originalEvent: e,
            type: this.getAttribute('type'),
            href: this.getAttribute('href')
          },
          bubbles: true,
          cancelable: true
        }));
      });
    }
  }

  // Регистрируем кастомный элемент
  customElements.define('custom-button', CustomButton);
}


