# (DTO) for PHP | Laravel - ro/dto


# About

DTO (DATA TRANSFER OBJECT) is a library that allows transferring data between different processes across the architecture.

Dto - ro for php improves communication by optimizing the number of method calls.

# Installation

```
composer require ro/dto-php
```


# Global Usage


> If the property that you gave it doesn't exists, it throw an exception.



| Action (Methods)        | Description           | Default value  |
| ------------- |:-------------:| -----:|
| set      | set new properties  | ["key" => "value"]|
| get      | obtains a specific property      |   (string) 'key' |
| extractDto | gets all properties with their respective values      |    [] |




