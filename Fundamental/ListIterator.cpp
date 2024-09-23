// Шаблон для работы с элементами произвольного типа.
template <class Item>

/**
 * Итератор для работы с объектами типа List<Item>.
 * Предоставляет методы для последовательного доступа к элементам списка.
 */
class ListIterator : public Iterator<Item>
{
public:
    // Конструктор, принимающий указатель на список
    ListIterator(const List<Item> *aList);

    // Устанавливает курсор на первый элемент списка
    virtual void First();

    // Перемещает курсор на следующий элемент списка
    virtual void Next();

    // Проверяет, достигнут ли конец списка
    virtual bool IsDone() const;

    // Возвращает текущий элемент списка, на который указывает курсор
    virtual Item CurrentItem() const;
};
