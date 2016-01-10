## PHP ActiveRecord is one open-source library designed to fulfill the active record pattern.

Several open-source PHP frameworks also bundle their own ORM implementing the active record pattern. Most
implementations support relationships, behaviors, validation, serialization and support for multiple data sources.
* Boiler, an MVC framework for PHP, contains a set of tools for auto-generation of active record models. The project,
designed for data-centered projects, aims to automate as much of the development process as possible, using Apache Ant.
Although a new addition to Open Source market, the project is already in use in many live applications, both
commercially and open. The framework currently only supports MySQL though the developers have reported some commercial
work in Postgres.
 *   Cygnite PHP Framework's default database layer implements Active Record pattern which closely resemble with Ruby
 on Rails.
  *  Laravel contains an ORM called 'Eloquent' which implements the active record pattern, closely resembling that of
    Ruby on Rails
  *  CakePHP's ORM implements the active record pattern, but as of version 2.x queries return arrays of data, with levels
     of related data as required. Version 3.0 uses objects.
  *  Lithium's ORM implements active record.
  *  Symfony's default database layer and ORM "Doctrine" does not implement active record but rather a data mapper
  approach.
  *  CodeIgniter has a query builder it calls "ActiveRecord", but which does not implement the Active Record pattern.
    Instead,
    it implements what the user guide refers to as a modified version of the pattern. The Active Record functionality in
     CodeIgniter can be achieved by using either CodeIgniter DataMapper library or CodeIgniter Gas ORM library.
  *  PHPixie's ORM implements active record.
  *  Yii's ORM also implements the active record pattern.
  *  Propel also implements the active record pattern.
  *  Paris is A lightweight Active Record implementation for PHP5, built on top of Idiorm.