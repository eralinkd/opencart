if (!customElements.get('ui-button-secondary')) {
  class UIButtonSecondary extends HTMLElement {
    constructor() {
      super();

      const template = document.getElementById('ui-button-secondary-template');
      if (!template) {
        console.error('Template "ui-button-secondary-template" not found');
        return;
      }

      const shadowRoot = this.attachShadow({ mode: 'open' });
      shadowRoot.appendChild(template.content.cloneNode(true));

      this.button = shadowRoot.querySelector('.ui-button-secondary');
    }

    static get observedAttributes() {
      return ['type', 'disabled', 'href', 'text', 'onclick'];
    }

    attributeChangedCallback(name, oldValue, newValue) {
      if (oldValue === newValue) return;

      this.updateButton();
    }

    connectedCallback() {
      this.updateButton();
      this.setupEventListeners();
    }

    disconnectedCallback() {
    }

    updateButton() {
      if (!this.button) return;

      const type = this.getAttribute('type') || 'primary';
      this.button.className = `ui-button-secondary ui-button-secondary-${type}`;

      if (this.hasAttribute('disabled')) {
        this.button.disabled = true;
        this.button.setAttribute('aria-disabled', 'true');
      } else {
        this.button.disabled = false;
        this.button.removeAttribute('aria-disabled');
      }

      const textAttr = this.getAttribute('text');
      if (textAttr) {
        const textSlot = this.shadowRoot.querySelector('slot[name="text"]');
        if (textSlot) {
          if (!textSlot.assignedNodes().length) {
            textSlot.textContent = textAttr;
          }
        }
      }

      const href = this.getAttribute('href');
      if (href && this.button.tagName === 'BUTTON') {
        const link = document.createElement('a');
        link.href = href;
        link.className = this.button.className;
        link.innerHTML = this.button.innerHTML;

        if (this.button.disabled) {
          link.setAttribute('aria-disabled', 'true');
        }

        this.button.parentNode.replaceChild(link, this.button);
        this.button = link;
      }
    }

    setupEventListeners() {
      if (!this.button) return;

      const onclickAttr = this.getAttribute('onclick');
      if (onclickAttr) {
        this.button.addEventListener('click', (e) => {
          try {
            new Function('event', onclickAttr)(e);
          } catch (error) {
            console.error('Error executing onclick:', error);
          }
        });
      }

      this.button.addEventListener('click', (e) => {
        if (this.button.disabled || this.button.getAttribute('aria-disabled') === 'true') {
          e.preventDefault();
          e.stopPropagation();
          return;
        }

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

  customElements.define('ui-button-secondary', UIButtonSecondary);
}


