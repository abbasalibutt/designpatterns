# Factory Design Pattern

It is a creational design pattern that talks about the creation of an object. 
The factory design pattern says that define an interface ( A php interface or an abstract class) for creating object and 
let the subclasses decide which class to instantiate. 
The factory method in the interface lets a class defers the instantiation to
one or more concrete subclasses. Since these design patterns talk about 
the instantiation of an object and so it comes under the category of 
creational design pattern. If we notice the name Factory method, 
that means there is a method which is a factory, and in general, 
factories are involved with creational stuff and here with this, 
an object is being created. It is one of the best ways to create an object 
where object creation logic is hidden from the client. 
Now Let’s look at the implementation.

# Implementation:

Define a factory method inside an interface.
Let the subclass implements the above factory method and decides which object to create.
In PHP, constructors are not polymorphic, but by allowing subclass to create an object, we are adding polymorphic behavior to the instantiation. In short, we are trying to achieve Pseudo polymorphism by letting the subclass to decide what to create, and so this Factory method is also called a virtual constructor.
Let us try to implement it with a real-time problem and some coding exercises.

# Problem Statement: 
Consider we want to implement a notification service through email, SMS, and push notifications. Let’s try to implement this with the help of the factory method design pattern. First, we will design a UML class diagram for this.


![image](https://drive.google.com/uc?export=view&id=1HCi1HBvJh0T_ao0h_AQSAOhIqvnYSTiq)

# Code Structure

![image](https://drive.google.com/uc?export=view&id=19b6peLw8iFYXAQweIWh-7YHu7Vn-A8Iv)

# Output of the code

![image](https://drive.google.com/uc?export=view&id=1Nt9I93TaCwt1aHmZo4U0EBPBYyYaR5Di)
