<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* catalog/view/template/common/card_component.twig */
class __TwigTemplate_32c9c7831dbf91f5f3a24f52740e618e extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 15
        yield "
<template id=\"custom-card-template\">
  <style>
    :host {
      display: block;
    }
    
    .custom-card {
      background: white;
      border-radius: 0.5rem;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
      display: flex;
      flex-direction: column;
      height: 100%;
    }
    
    .custom-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }
    
    .custom-card-image {
      width: 100%;
      height: 200px;
      object-fit: cover;
      display: block;
    }
    
    .custom-card-image-placeholder {
      width: 100%;
      height: 200px;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 3rem;
    }
    
    .custom-card-body {
      padding: 1.5rem;
      flex: 1;
      display: flex;
      flex-direction: column;
    }
    
    .custom-card-title {
      font-size: 1.5rem;
      font-weight: bold;
      margin-bottom: 0.75rem;
      color: #1f2937;
      line-height: 1.3;
    }
    
    .custom-card-content {
      color: #6b7280;
      line-height: 1.6;
      margin-bottom: 1rem;
      flex: 1;
    }
    
    .custom-card-footer {
      margin-top: auto;
      padding-top: 1rem;
      border-top: 1px solid #e5e7eb;
    }
    
    slot[name=\"image\"]::slotted(*) {
      display: block;
      width: 100%;
    }
    
    slot[name=\"content\"]::slotted(*) {
      display: block;
    }
    
    slot[name=\"footer\"]::slotted(*) {
      display: block;
    }
  </style>
  
  <div class=\"custom-card\">
    <slot name=\"image\">
      <div class=\"custom-card-image-placeholder\">
        <i class=\"fa-solid fa-image\"></i>
      </div>
    </slot>
    
    <div class=\"custom-card-body\">
      <div class=\"custom-card-title\">
        <slot name=\"title\">Заголовок карточки</slot>
      </div>
      
      <div class=\"custom-card-content\">
        <slot name=\"content\">Содержимое карточки</slot>
      </div>
      
      <div class=\"custom-card-footer\">
        <slot name=\"footer\"></slot>
      </div>
    </div>
  </div>
</template>

<script>
  // Проверяем, не зарегистрирован ли уже компонент
  if (!customElements.get('custom-card')) {
    class CustomCard extends HTMLElement {
      constructor() {
        super();
        
        // Получаем шаблон
        const template = document.getElementById('custom-card-template');
        if (!template) {
          console.error('Template \"custom-card-template\" not found');
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
          const titleSlot = this.shadowRoot.querySelector('slot[name=\"title\"]');
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
          const imageSlot = this.shadowRoot.querySelector('slot[name=\"image\"]');
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
</script>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/card_component.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 15,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
  Локальный компонент карточки с использованием template и slot
  
  Использование:
  {% include 'common/card-component' %}
  
  Затем используйте:
  <custom-card title=\"Заголовок\" image=\"image.jpg\">
    <div slot=\"content\">Содержимое карточки</div>
    <div slot=\"footer\">
      <custom-button type=\"primary\" text=\"Подробнее\"></custom-button>
    </div>
  </custom-card>
#}

<template id=\"custom-card-template\">
  <style>
    :host {
      display: block;
    }
    
    .custom-card {
      background: white;
      border-radius: 0.5rem;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
      display: flex;
      flex-direction: column;
      height: 100%;
    }
    
    .custom-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }
    
    .custom-card-image {
      width: 100%;
      height: 200px;
      object-fit: cover;
      display: block;
    }
    
    .custom-card-image-placeholder {
      width: 100%;
      height: 200px;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 3rem;
    }
    
    .custom-card-body {
      padding: 1.5rem;
      flex: 1;
      display: flex;
      flex-direction: column;
    }
    
    .custom-card-title {
      font-size: 1.5rem;
      font-weight: bold;
      margin-bottom: 0.75rem;
      color: #1f2937;
      line-height: 1.3;
    }
    
    .custom-card-content {
      color: #6b7280;
      line-height: 1.6;
      margin-bottom: 1rem;
      flex: 1;
    }
    
    .custom-card-footer {
      margin-top: auto;
      padding-top: 1rem;
      border-top: 1px solid #e5e7eb;
    }
    
    slot[name=\"image\"]::slotted(*) {
      display: block;
      width: 100%;
    }
    
    slot[name=\"content\"]::slotted(*) {
      display: block;
    }
    
    slot[name=\"footer\"]::slotted(*) {
      display: block;
    }
  </style>
  
  <div class=\"custom-card\">
    <slot name=\"image\">
      <div class=\"custom-card-image-placeholder\">
        <i class=\"fa-solid fa-image\"></i>
      </div>
    </slot>
    
    <div class=\"custom-card-body\">
      <div class=\"custom-card-title\">
        <slot name=\"title\">Заголовок карточки</slot>
      </div>
      
      <div class=\"custom-card-content\">
        <slot name=\"content\">Содержимое карточки</slot>
      </div>
      
      <div class=\"custom-card-footer\">
        <slot name=\"footer\"></slot>
      </div>
    </div>
  </div>
</template>

<script>
  // Проверяем, не зарегистрирован ли уже компонент
  if (!customElements.get('custom-card')) {
    class CustomCard extends HTMLElement {
      constructor() {
        super();
        
        // Получаем шаблон
        const template = document.getElementById('custom-card-template');
        if (!template) {
          console.error('Template \"custom-card-template\" not found');
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
          const titleSlot = this.shadowRoot.querySelector('slot[name=\"title\"]');
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
          const imageSlot = this.shadowRoot.querySelector('slot[name=\"image\"]');
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
</script>

", "catalog/view/template/common/card_component.twig", "D:\\xampp\\htdocs\\opencart\\catalog\\view\\template\\common\\card_component.twig");
    }
}
