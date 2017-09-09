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

Структурные шаблоны проектирования
-----------------------------------
**Адаптер** - Если у вас есть два объекта, которые вы хотите обьеденить под общим интерфейсом, то можно сделать с помощью класса адаптера и внедрить зависимость, или с помощью трейтов.

**Bridge** - посотроен на принципе композиции. И поведение изменяется в зависимости от передаваемого обьекта в конструктор главного обьекта. 

**Composite** - композит весьма прост, одинаковые или очень схожие обьекты по своей структуре обьеденяются в композите, или проще в неком свойстве массиве, где после с ними работают как с групой. Некий group by для ООП.

**Decorator** - Декоратор предусматривает расширение функциональности объекта без определения подклассов. Функциональность, которая будет выполняться до, после или даже вместо основной функциональности объекта.

**Фасад** - предоставляем обьект который имеет в себе простые методы, но со сложной логикой последовательных действий. Используется в библиотеках и расширениях, API.

**Proxy** - проверяет вызов перед действием, чтобы был доверенный обьект с нужными свойствами или реализацией.

Поведенческие шаблоны проектирования
-----------------------------------
**Momento** или **Хранитель** сохраняет состояния эдитора в дополнительном объекте, после чего едитор можно востановить с помощью этого объекта. Например записываем алгоритм действий в строку, после создаем объект с этой строкой, дальше продолжаем алгоритм, и снова записываем в новый объект, после восстанавлиеваем, путем взятия строки алгоритма из созданных объектов.

**Mediator** - **посрденик** есть похожие обьекты и прослойка между ними, которая использует данные обьектов, чтобы совершать действие. Есть два пользователя, и чтобы они отправляли сообщения, то есть прослойка чат, которая получает пользователя и его сообщения, используя обьект (данные пользователя) выполняет действие.

***Command** - у нас есть набор обьектов (команд), мы создаем Invoker обьект который принимает обьект (команду), а за выполнение отвечает Receiver который есть в каждой команде, он и выполняет действие (логику). Например нужно убрать мусор, команда CleanGarbage, в ней есть Cleaner (Receiver) который знает как это сделать, и Manager (Invoker) который дал такую команду. в итоге $manager->command($cleanGarbage); 

**Observer** - наблюдатель, есть колекция наблюдателей, и действующий обьект, о действиях которого наблюдатели оповещаються. Например есть очередь, это наблюдатели, и пропускной офицер (действующий обьект), когда офицер выдает новый билет, перебирается колекция всех в очереди и оповещаються. У офицера есть колекция людей (обьектов) очереди, а у людей, обьект (билет) о котором их оповещают.



# Write code and love php, X
P.S.: For better understanding check this out:
* [dominikl/DesignPatternsPHP](https://github.com/domnikl/DesignPatternsPHP)
* [tutsplus/DesignPatternsInPHP](http://code.tutsplus.com/series/design-patterns-in-php--cms-747)
* [phptherightway](http://www.phptherightway.com/pages/Design-Patterns.html)
* [wiki](https://en.wikipedia.org/wiki/Software_design_pattern)
