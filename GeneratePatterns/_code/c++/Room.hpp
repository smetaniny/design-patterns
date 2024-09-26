// Класс Room представляет комнату в лабиринте, наследует MapSite.
class Room : public MapSite {
public:
    // Конструктор, принимающий номер комнаты.
    Room(int roomNo) : _roomNumber(roomNo) {
        // Инициализируем стороны комнаты как пустые
        for (int i = 0; i < 4; ++i) {
            _sides[i] = nullptr;
        }
    }

    // Возвращает объект на конкретной стороне комнаты (например, стена, дверь).
    MapSite* GetSite(Direction dir) const {
        return _sides[dir];
    }

    // Устанавливает элемент на конкретную сторону комнаты (например, дверь, стену).
    void SetSide(Direction dir, MapSite* site) {
        _sides[dir] = site;
    }

    // Реализация виртуальной функции Enter.
    virtual void Enter() {
        std::cout << "Вы вошли в комнату " << _roomNumber << ".\n";
    }

private:
    MapSite* _sides[4];  // Массив, представляющий 4 стороны комнаты (север, юг, восток, запад).
    int _roomNumber;  // Номер комнаты.
};
