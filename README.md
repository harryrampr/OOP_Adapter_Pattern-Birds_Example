## Adapter Pattern (OOP) - Animals Simulation Example

We are sharing some simple PHP code, showing the use of
the [Adapter Pattern](https://en.wikipedia.org/wiki/Adapter_pattern). You will see how modern versions
of PHP, supporting Classes and Interfaces, make it easy to implement the Adapter Pattern using this language.

You can find the PHP 8.1 code
at [/app/src](https://github.com/harryrampr/OOP_Adapter_Pattern-Birds_Example/tree/master/app/src), there is testing
at [/tests](https://github.com/harryrampr/OOP_Adapter_Pattern-Birds_Example/tree/master/app/tests) directory. HTML
output with Tailwind CSS can be found
at [/app/public](https://github.com/harryrampr/OOP_Adapter_Pattern-Birds_Example/tree/master/app/public) directory.

### About the Pattern

The Adapter pattern is a structural design pattern
in [object-oriented programming](https://en.wikipedia.org/wiki/Object-oriented_programming) that allows incompatible
interfaces of two existing classes to work together by providing a wrapper or adapter class. It acts as a bridge between
the two classes, converting the interface of one class into another interface that the client expects.

### History

The Adapter pattern, also known as the Wrapper pattern, has been present in software development for many years.
However, its formal definition and documentation can be attributed to the book ["Design Patterns: Elements of Reusable
Object-Oriented Software"](https://en.wikipedia.org/wiki/Design_Patterns), often referred to as the Gang of Four (GoF)
book. The book was published in 1994 and was authored by Erich Gamma, Richard Helm, Ralph Johnson, and John Vlissides,
who are commonly known as the Gang of Four.

The concept of adapting or wrapping objects to make them compatible has been practiced in software development for quite
some time. In fact, similar concepts to the Adapter pattern can be found in earlier software engineering practices. For
instance, in the realm of programming languages, concepts like type coercion, type casting, and interface implementation
can be considered as forms of adapting or transforming interfaces.

### Intent

The intent of the Adapter pattern is to enable communication and interaction between two classes with incompatible
interfaces. It allows objects with different interfaces to work together by providing a common interface through an
adapter class. The adapter translates the requests from the client to the appropriate calls on the adaptee, facilitating
the interaction between the two classes.

### Structure

- **Target:** Represents the desired interface that the client expects to work with.
- **Client:** Collaborates with the target interface to perform operations.
- **Adaptee:** Defines an existing interface that needs to be adapted.
- **Adapter:** Implements the target interface and acts as a bridge between the client and the adaptee. It wraps the
  adaptee and translates the requests from the client to the appropriate calls on the adaptee.

### How it Works

1. The client interacts with the target interface to perform operations, unaware of the existence of the adaptee.
2. The adapter class is created, implementing the target interface and maintaining a reference to the adaptee object.
3. When the client invokes a method on the target interface, the adapter translates the request and delegates it to the
   corresponding method of the adaptee.
4. The adaptee processes the request and returns the result to the adapter.
5. The adapter then returns the result to the client, who perceives the interaction as if it directly called the target
   interface.

### Benefits

- Allows the integration and collaboration between classes with incompatible interfaces.
- Enables the reuse of existing classes without modifying their code.
- Provides a bridge between different components or systems, promoting interoperability.
- Facilitates the gradual migration or transition from one interface to another.
- Enhances code maintainability by decoupling the client from the implementation details of the adaptee.
- Supports the [Open-Closed Principle](https://en.wikipedia.org/wiki/Open%E2%80%93closed_principle), as new adapters can
  be added without modifying the existing code.

### Applications

- **Legacy System Integration:** The Adapter pattern is often used when integrating new systems or components with
  existing legacy systems that have incompatible interfaces. Adapters can be implemented to translate and adapt the
  interfaces of the legacy system to the new system, enabling seamless communication between them.

- **Library or Framework Integration:** When utilizing third-party libraries or frameworks, the Adapter pattern can be
  employed to adapt their interfaces to fit the specific requirements of an application. Adapters act as a layer
  between the application and the library, providing a compatible interface that the application can interact with.

- **Database Connectivity:** Adapters are frequently used in database access to provide a common interface for different
  database systems. The adapters translate the specific database API calls into a generic interface that the application
  uses to interact with any supported database system.

- **Hardware Device Integration:** The Adapter pattern finds application in integrating hardware devices with software
  systems. Adapters can be used to adapt the device-specific protocols or interfaces to a common interface that the
  software system understands. This allows the system to communicate with and control various hardware devices
  seamlessly.

- **GUI Component Integration:** Graphical User Interface (GUI) frameworks often use adapters to integrate and
  standardize the behavior of different GUI components. Adapters can be employed to adapt the interfaces of various UI
  elements, such as buttons, checkboxes, or menus, to a common interface, allowing them to be used interchangeably
  within the framework.

- **Web Service Integration:** When interacting with external web services that have varying interfaces, adapters can be
  utilized to adapt and standardize the communication between the client application and the web service. Adapters
  translate requests and responses to the appropriate formats and protocols used by the web service, ensuring
  compatibility.

- **Testing and Mocking:** Adapters can be beneficial in testing scenarios where mock objects or stubs are needed to
  simulate the behavior of real objects. Adapters can be created to mimic the interfaces of the actual objects, allowing
  for easier testing and isolation of specific components or functionalities.

- **Internationalization and Localization:** The Adapter pattern can be used to adapt software components to support
  different languages or locales. Adapters can handle the translation and localization of text and other resources,
  allowing the software to be easily internationalized without modifying the core components.

- **Logging and Logging Frameworks:** Adapters can be employed in logging systems to adapt different logging frameworks
  or libraries to a common logging interface. This allows developers to switch or use multiple logging frameworks
  seamlessly without modifying the logging code throughout the application.

- **Data Format Conversion:** Adapters are commonly used to convert data between different formats or protocols. For
  example, adapters can be implemented to convert XML data to JSON format or to adapt data between different versions of
  a protocol or data structure.

### Other Examples

An example of the Adapter pattern is the usage of adapters to connect different types of electrical plugs to wall
outlets in different countries. The wall outlet represents the target interface, while the electrical plug represents
the adaptee. Each country may have its own plug format, making the plugs incompatible with the wall outlets in other
countries. In this scenario, the adapter acts as a bridge between the plug and the outlet. It provides a wrapper that
converts the incompatible plug interface into a compatible interface for the outlet. The adapter physically modifies the
plug, adding or removing pins or using an intermediary connector, allowing the plug to be inserted into the outlet and
enabling the flow of electricity. The client, in this case, is the device or appliance that can now be powered by the
outlet through the adapter. The client interacts with the adapter using the standard interface expected by the outlet,
unaware of the underlying plug-adapter-outlet interaction.