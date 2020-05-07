Que es la abstracción:
    proceso mental donde se toma algo que esta en la realidad y transformarlo a un paradigma. Es decir: "Encontrar características (atributos) de una entidad de la realidad".
    Según mi definición es basarse en algo real y extraer sus propiedades básicas e importantes, necesarias para el trabajo en cuestión.

Emplo de abstracción:
    De todas las definiciones que podemos tener de una persona, podemos destacar que por lo general una persona posee "atributo", es decir caracteristicas comunes como:
        - Nombre
        - Apellido
        - Fecha de Nacimiento
        O incluso acciones tales puedo mencionar:
        - Caminar
        - Respirar
        - Comer
    En resumen, las caracteristicas básicas y necesarias que me definen como un ser humano.

Encapsulación de una persona:
    class Person{
    private $name;
    private $lastname;
    private $DOB;
    }

    Segun este codigo, la propiedades de la clase persona son privados, es decir no pueden ser llamados directamente por el objeto ($objeto->propiedad), es decir estan protegidos contra acceso o modificación dado que solo metodos dentro de la misma clase pueden usar y alterar sus valores. Por el contrario, si estuviesen en modo public, estos pueden ser usados desde cualquier parte simplemente invocando al objeto llamando a dicha propiedad.
    

segundo pilar de la programación
    Encapsulamiento    

que es el encapsulamiento?--ejemplo
    "Mecanismo de protección de un objeto" o "visibilidad de atributos y metodos".
    
    Si suponemos que una persona y seguimos hablando de abstracción, el sueldo, numeros de tarjeta de credito, cuentas bancarias, etc corresponden a cosas privadas o "propiedades de tipo private". Mi nombre, apellidos y fecha de nacimiento son propiedades publicas y, digamos el acceso a la cuenta de neftflix de mi hogar, esa es protegida, pues solo miembros de mi familia tienen acceso.

Suponiendo esas propiedades de la clase persona

que es herencia --ejemplo
    "Pasar bienes (atributos, comportamientos) desde una clase madre a una clase hija."

ejemplo de luis y esmeralda