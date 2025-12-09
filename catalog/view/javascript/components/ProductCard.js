if (!customElements.get('custom-card')) {
  class CustomCard extends HTMLElement {
    constructor() {
      super();

      const template = document.getElementById('custom-card-template');
      if (!template) {
        console.error('Template "custom-card-template" not found');
        return;
      }

      const shadowRoot = this.attachShadow({ mode: 'open' });
      shadowRoot.appendChild(template.content.cloneNode(true));
    }

    static get observedAttributes() {
      return ['title', 'image'];
    }

    attributeChangedCallback(name, oldValue, newValue) {
      if (oldValue === newValue) return;
      
      this.updateCard();
    }

    connectedCallback() {
      this.updateCard();
    }
    
    updateCard() {
      const titleAttr = this.getAttribute('title');
      if (titleAttr) {
        const titleSlot = this.shadowRoot.querySelector('slot[name="title"]');
        if (titleSlot) {
          if (!titleSlot.assignedNodes().length) {
            titleSlot.textContent = titleAttr;
          }
        }
      }

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

  customElements.define('custom-card', CustomCard);
}

