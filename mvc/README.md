# MVC
MVC allows you to keep the application’s business logic detached from its interface. MVC also helps you keep all functionalities encapsulated and independent from each other. You can modify each component in total isolation from others and avoid breaking your code.

I am not using any PHP framework, and the code is in native PHP.

The figure below presents the project structure:

![image](https://drive.google.com/uc?export=view&id=1SwnbN_p4HrrnE3ji3QWnRrW3OGXx5CVn)

You just need to access the index.php file then it will show you the work of MVC

# Model and Classes

The Model is responsible for the data, and the logic of an application or the business logic.
Model’s responsibilities include; data store, retrieve, delete, and update. Generally, it includes database operations and the implementation of the operations that invoke external web services or APIs.

In this example, the Model includes two classes:
the “Model” class and a “Customer” class.

The Model class doesn’t need a presentation. The “Transaction” class is an entity(object) class, and I expose this class to the View layer.


# View

The View (presentation layer)is responsible for formatting the data received from the Model. The data can come in different formats from the Model, including, XML structures, JSON, HTML


# Controller

The Controller receives the request, parses it, and then it initializes and invokes the Model. The Controller, then, takes the model response and sends it to the View layer. It’s practically the bridge between the Model and the View. The application entry point is index.php. The index.php file delegates all the requests to the Controller.