
// Класс MazeGame отвечает за создание лабиринта.
class MazeGame {
public:
    // Метод для создания лабиринта.
    Maze* CreateMaze() {
        Maze* aMaze = new Maze;  // Создаём лабиринт
        Room* r1 = new Room(1);  // Создаём первую комнату
        Room* r2 = new Room(2);  // Создаём вторую комнату
        Door* theDoor = new Door(r1, r2);  // Создаём дверь между комнатами

        // Добавляем комнаты в лабиринт
        aMaze->AddRoom(r1);
        aMaze->AddRoom(r2);

        // Устанавливаем объекты на стороны комнаты 1
        r1->SetSide(North, new Wall);  // Северная стена
        r1->SetSide(East, theDoor);    // Восточная дверь
        r1->SetSide(South, new Wall);  // Южная стена
        r1->SetSide(West, new Wall);   // Западная стена

        // Устанавливаем объекты на стороны комнаты 2
        r2->SetSide(North, new Wall);  // Северная стена
        r2->SetSide(East, new Wall);   // Восточная стена
        r2->SetSide(South, new Wall);  // Южная стена
        r2->SetSide(West, theDoor);    // Западная дверь

        return aMaze;  // Возвращаем созданный лабиринт
    }
};
