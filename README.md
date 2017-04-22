Design-pattern
==============
Pattern by Sydorenko.
----------------------------------------------------
### I have here all pattern for useful and more productive development. I've done it for some reason:
* There is no really full book for describing patterns. Some of them have boring UML, some of them were written on Smaltalk, etc.
* Particularly i have not seen good realization on php.
* I'd liked to describe  more patterns, with more examples and more descriptions.

[![Singleton](https://j.gifs.com/gJxwvY.gif)](https://youtu.be/61yptGbyGKA)

### Singleton: 
[example1: value are still there](https://github.com/sydorenkovd/Design-pattern/blob/master/Creational(generate%20objects)/Singleton.php) | [two: class Logon](https://github.com/sydorenkovd/Design-pattern/blob/master/Creational(generate%20objects)/Singleton_.php)

Шаблоны Singleton - это шаг вперед по сравнению с использованием глобальных
 переменных в объектно-ориентированном контексте. Вы не сможете затереть
объекты Singleton неправильными данными. Такой вид защиты особенно важен в
версиях РНР, в которых нет поддержки пространства имен. Любой конфликт имен
будет обнаружен на стадии компиляции, что приведет к завершению выполнения
программы.
Используется для создания всего одного экземпляра класса и гарантирует,
 что во время работы программы не появиться второй. Например, в схеме MVC, зачастую этот
паттерн используется для порождения главного (фронтового) контроллера.


Паттерны простыми словами, очень простыми, принципы.
-----------------------------------------------------
Порождающие шаблоны проектирования (Creational)

**Фабрика** - просто создает объект с нужными свойствами.
**Абстрактная фабрика** - обьеденяет обьекты в одной фабрике и фабрики под общим интерфейсом. То есть одна фабрика может создавать несколько обьектов, но со схожим типом.
**Фабричный метод** - существует один метод, и в зависимости на каком классе наследнике он вызывается, такая логика и будет. Как правило логика это создать обьект и выполнить действие зависимо от класса в контексте которого он был вызван.
**Строитель(builder)** - нужен, чтобы избежать антипаттерна Telescoping constructor, что  подразумевает передачи большого количества свойств в конструктор. Мы создаем объект по средствам "строителя", присваивая ему те или иные значения методами, возращая готовый объект.
**Прототип** - обычное клонирование обьекта по средствам php и его всевозможной модификации независимо от обьекта исходного.

# Write code and love php, X
P.S.: For better understanding check this out:
* [dominikl/DesignPatternsPHP](https://github.com/domnikl/DesignPatternsPHP)
* [tutsplus/DesignPatternsInPHP](http://code.tutsplus.com/series/design-patterns-in-php--cms-747)
* [phptherightway](http://www.phptherightway.com/pages/Design-Patterns.html)
* [wiki](https://en.wikipedia.org/wiki/Software_design_pattern)
