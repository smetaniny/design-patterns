
Чтобы сделать полный пример, включающий все порождающие паттерны (Абстрактная фабрика, Фабричный метод, Строитель, Прототип и Синглтон), мы расширим структуру проекта, добавив соответствующие паттерны. Структура будет построена таким образом, чтобы легко масштабироваться, добавлять новые категории одежды и новые типы продуктов, сохраняя при этом гибкость и модульность.

```
/GeneratePatterns
│
│   ├── /Factories/                         # Папка с фабриками и абстрактными фабриками
│   │   ├── AbstractClothingFactory.php     # Абстрактная фабрика для одежды
│   │   ├── MenClothingFactory.php          # Фабрика для мужской одежды
│   │   ├── WomenClothingFactory.php        # Фабрика для женской одежды
│   │   └── SuitFactory.php                 # Фабричный метод для создания костюмов
│   │
│   ├── /Builders/                          # Папка с паттернами Строитель
│   │   ├── SuitBuilder.php                 # Строитель для костюмов
│   │   └── DressBuilder.php                # Строитель для платьев
│   │
│   ├── /Products/                          # Конкретные классы одежды (объекты)
│   │   ├── Suit.php                        # Класс костюма
│   │   ├── Dress.php                       # Класс платья
│   │   ├── CustomSuit.php                  # Класс костюма, созданного через Строитель
│   │   └── Contracts/                     # Интерфейсы для объектов
│   │       ├── ClothingItem.php            # Интерфейс для одежды
│   │       └── ComplexClothingItem.php     # Интерфейс для сложных объектов одежды
│   │
│   ├── /Prototypes/                        # Паттерн Прототип для клонирования объектов
│   │   ├── ClothingPrototype.php           # Абстрактный класс прототипа
│   │   ├── SuitPrototype.php               # Прототип для костюмов
│   │   ├── DressPrototype.php              # Прототип для платьев
│   │   └── PrototypeRegistry.php           # Реестр прототипов для быстрого клонирования
│   │
│   ├── /Singletons/                        # Паттерн Синглтон
│   │   └── ProductCatalogSingleton.php     # Синглтон для каталога продуктов 
│
│   └── /tests/                             # Тесты для всех компонентов
│       ├── ClothingFactoryTest.php         # Тесты для абстрактной фабрики и фабричных методов
│       ├── BuilderTest.php                 # Тесты для паттерна Строитель
│       ├── PrototypeTest.php               # Тесты для паттерна Прототип
│       └── SingletonTest.php               # Тесты для паттерна Синглтон
│
└── GeneratePatternsController.php          # Пример использования всех паттернов
```

# Порядок реализации классов для проекта по порождающим паттернам

## 1. Интерфейсы и Базовые классы
- **`/Products/Contracts/ClothingItem.php`**
  - Методы:
    - `getDescription()`
    - `getPrice()`
  
- **`/Products/Contracts/ComplexClothingItem.php`**
  - Методы:
    - `getComponents()`

## 2. Продукты (Классы одежды)
- **`/Products/Suit.php`** (класс костюма)
  - Методы:
    - `getDescription()`
    - `getPrice()`
    - `getComponents()`

- **`/Products/Dress.php`** (класс платья)
  - Методы:
    - `getDescription()`
    - `getPrice()`

- **`/Products/CustomSuit.php`** (класс кастомного костюма)
  - Методы:
    - `getDescription()`
    - `getPrice()`
    - `getComponents()`

## 3. Фабрики
- **`/Factories/AbstractClothingFactory.php`** (абстрактная фабрика)
  - Методы:
    - `createClothingItem()`

- **`/Factories/MenClothingFactory.php`** (фабрика для мужской одежды)
  - Методы:
    - `createClothingItem()`

- **`/Factories/WomenClothingFactory.php`** (фабрика для женской одежды)
  - Методы:
    - `createClothingItem()`

- **`/Factories/SuitFactory.php`** (фабричный метод для создания костюмов)
  - Методы:
    - `createSuit()`

## 4. Строители
- **`/Builders/SuitBuilder.php`** (строитель для костюмов)
  - Методы:
    - `createJacket()`
    - `createTrousers()`
    - `createVest()`
    - `getResult()`

- **`/Builders/DressBuilder.php`** (строитель для платьев)
  - Методы:
    - `createDress()`
    - `getResult()`

## 5. Прототипы
- **`/Prototypes/ClothingPrototype.php`** (абстрактный класс прототипа)
  - Методы:
    - `clone()`

- **`/Prototypes/SuitPrototype.php`** (прототип для костюмов)
  - Методы:
    - `clone()`

- **`/Prototypes/DressPrototype.php`** (прототип для платьев)
  - Методы:
    - `clone()`

- **`/Prototypes/PrototypeRegistry.php`** (реестр прототипов)
  - Методы:
    - `register()`
    - `get()`

## 6. Синглтон
- **`/Singletons/ProductCatalogSingleton.php`** (синглтон для каталога продуктов)
  - Методы:
    - `getInstance()`
    - `addProduct()`
    - `getProducts()`

## 7. Тесты
- **`/tests/ClothingFactoryTest.php`** (тесты для фабрик)
- **`/tests/BuilderTest.php`** (тесты для строителей)
- **`/tests/PrototypeTest.php`** (тесты для прототипов)
- **`/tests/SingletonTest.php`** (тесты для синглтона)

## 8. Контроллер
- **`GeneratePatternsController.php`** (пример использования всех паттернов)
