# Документация по Backend части проекта запчастей для дронов

## Обзор проекта

Проект представляет собой интернет-магазин запчастей для дронов на базе OpenCart. Реализована backend часть с использованием принципов ООП и SOLID.

## Структура проекта

### Сервисные классы (ООП, SOLID)

Все сервисные классы находятся в `system/library/drone_parts/`:

1. **CategoryService.php** - Сервис для работы с категориями
   - Создание категорий
   - Получение категорий
   - Управление категориями

2. **ProductService.php** - Сервис для работы с товарами
   - Создание товаров
   - Обновление товаров
   - Удаление товаров
   - Работа с изображениями товаров

3. **CategoryAttributeService.php** - Сервис для работы с параметрами категорий
   - Управление атрибутами категорий
   - Создание групп атрибутов

## Категории

### Созданные категории

1. **Controllers** (Контроллеры) - ID: 59
   - Контроллеры полета для дронов
   - SEO keyword: `controllers`

2. **Batteries** (Батареи) - ID: 60
   - Аккумуляторные батареи для дронов
   - SEO keyword: `batteries`

### Создание категорий

Категории создаются через скрипт миграции:
```bash
php install/create_drone_categories.php
```

## Товары

### Поля товаров

Товары имеют следующие обязательные поля:

1. **Название** (`name`) - хранится в `product_description`
2. **Цена** (`price`) - хранится в `product`
3. **Описание** (`description`) - хранится в `product_description`
4. **Статус в магазине** (`status`) - хранится в `product` (0/1)
5. **Количество на складе** (`quantity`) - хранится в `product`
6. **Изображения**:
   - Основное изображение (`image`) - хранится в `product`
   - Дополнительные изображения - хранятся в `product_image`

### Создание товаров через админку

Админка OpenCart уже имеет полнофункциональную форму для создания товаров:
- Путь: `admin/catalog/product/form`
- Контроллер: `admin/controller/catalog/product.php`
- Шаблон: `admin/view/template/catalog/product_form.twig`

### Использование ProductService

```php
// Загрузка сервиса
require_once(DIR_SYSTEM . 'library/drone_parts/ProductService.php');
$productService = new \Opencart\System\Library\DroneParts\ProductService($registry);

// Создание товара
$product_data = [
    'name' => 'Flight Controller F4',
    'description' => 'High-performance flight controller',
    'price' => 49.99,
    'quantity' => 10,
    'status' => 1,
    'product_category' => [59], // ID категории Controllers
    'product_image' => [
        ['image' => 'catalog/controller1.jpg', 'sort_order' => 0],
        ['image' => 'catalog/controller2.jpg', 'sort_order' => 1]
    ]
];

$product_id = $productService->createProduct($product_data);
```

## Параметры категорий

Каждая категория может иметь свои специфические параметры через систему атрибутов OpenCart.

### Пример параметров для категории "Контроллеры":
- Процессор (CPU)
- Память (Memory)
- Протокол (Protocol)
- Размер (Size)

### Пример параметров для категории "Батареи":
- Емкость (Capacity)
- Напряжение (Voltage)
- Разъем (Connector)
- Вес (Weight)

## База данных

### Основные таблицы:

- `oc_product` - основная информация о товарах
- `oc_product_description` - названия и описания товаров (многоязычность)
- `oc_product_image` - дополнительные изображения товаров
- `oc_category` - категории
- `oc_category_description` - описания категорий
- `oc_product_to_category` - связь товаров с категориями
- `oc_attribute` - атрибуты товаров
- `oc_product_attribute` - значения атрибутов для товаров

## Принципы SOLID

Проект следует принципам SOLID:

1. **Single Responsibility** - каждый сервис отвечает за свою область
2. **Open/Closed** - сервисы расширяемы без изменения существующего кода
3. **Liskov Substitution** - использование интерфейсов и абстракций
4. **Interface Segregation** - четкое разделение ответственности
5. **Dependency Inversion** - зависимость от абстракций (Registry)

## Следующие шаги

1. ✅ Создание категорий
2. ✅ Сервисные классы для товаров и категорий
3. ⏳ Создание параметров для категорий
4. ⏳ API для работы с товарами
5. ⏳ Интеграция с фронтендом

## Запуск миграций

```bash
# Создание категорий
php install/create_drone_categories.php
```

## Примечания

- Все сервисы используют Registry для доступа к моделям OpenCart
- Модели загружаются через Loader для правильной инициализации
- Поддерживается многоязычность через language_id
- SEO URLs создаются автоматически при создании категорий

