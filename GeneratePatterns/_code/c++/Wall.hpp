// Класс Wall представляет стену в лабиринте, наследует MapSite.
class Wall : public MapSite {
public:
    Wall() {}  // Конструктор стены

    // Реализация виртуальной функции Enter для стены.
    virtual void Enter() {
        // Логика при попытке войти в стену.
        std::cout << "Вы упёрлись в стену.\n";
    }
};
