/**
 * Локальный компонент карточки с использованием template и slot
 * 
 * Использование:
 * <custom-card title="Заголовок" image="image.jpg">
 *   <div slot="content">Содержимое</div>
 *   <div slot="footer">
 *     <custom-button type="primary" text="Подробнее"></custom-button>
 *   </div>
 * </custom-card>
 * 
 * Требует наличия <template id="custom-card-template"> в HTML
 */

// Проверяем, не зарегистрирован ли уже компонент
if (!customElements.get('custom-card')) {
  class CustomCard extends HTMLElement {
    constructor() {
      super();
      
      // Получаем шаблон
      const template = document.getElementById('custom-card-template');
      if (!template) {
        console.error('Template "custom-card-template" not found');
        return;
      }
      
      // Создаем Shadow DOM
      const shadowRoot = this.attachShadow({ mode: 'open' });
      shadowRoot.appendChild(template.content.cloneNode(true));
    }
    
    // Отслеживаем изменения атрибутов
    static get observedAttributes() {
      return ['title', 'image'];
    }
    
    // Вызывается при изменении атрибутов
    attributeChangedCallback(name, oldValue, newValue) {
      if (oldValue === newValue) return;
      
      this.updateCard();
    }
    
    // Вызывается при добавлении элемента в DOM
    connectedCallback() {
      this.updateCard();
    }
    
    updateCard() {
      // Если есть атрибут title, обновляем слот
      const titleAttr = this.getAttribute('title');
      if (titleAttr) {
        const titleSlot = this.shadowRoot.querySelector('slot[name="title"]');
        if (titleSlot) {
          // Если в слоте нет контента, устанавливаем текст
          if (!titleSlot.assignedNodes().length) {
            titleSlot.textContent = titleAttr;
          }
        }
      }
      
      // Если есть атрибут image, добавляем изображение
      const imageAttr = this.getAttribute('image');
      if (imageAttr) {
        const imageSlot = this.shadowRoot.querySelector('slot[name="image"]');
        if (imageSlot && !imageSlot.assignedNodes().length) {
          const img = document.createElement('img');
          img.src = imageAttr;
          img.alt = titleAttr || 'Изображение';
          img.className = 'custom-card-image';
          this.appendChild(img);
          img.setAttribute('slot', 'image');
        }
      }
    }
  }
  
  // Регистрируем кастомный элемент
  customElements.define('custom-card', CustomCard);
}

