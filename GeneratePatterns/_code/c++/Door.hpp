// Класс Door представляет дверь, соединяющую две комнаты, наследует MapSite.
class Door : public MapSite {
public:
    // Конструктор двери, принимает две комнаты.
    Door(Room* room1 = 0, Room* room2 = 0) : _room1(room1), _room2(room2), _isOpen(false) {}

    // Реализация виртуальной функции Enter.
    virtual void Enter() {
        if (_isOpen) {
            std::cout << "Вы проходите через открытую дверь.\n";
        } else {
            std::cout << "Дверь закрыта.\n";
        }
    }

    // Возвращает комнату на другой стороне двери.
    Room* OtherSideFrom(Room* room) {
        if (room == _room1) {
            return _room2;
        } else {
            return _room1;
        }
    }

private:
    Room* _room1;  // Первая комната
    Room* _room2;  // Вторая комната
    bool _isOpen;  // Флаг состояния двери (открыта или закрыта)
};
