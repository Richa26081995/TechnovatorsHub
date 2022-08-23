<!DOCTYPE html>
<html>
<head>
	<title>JAVA QUESTIONS</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/interviewques.css">
<link rel="stylesheet" type="text/css" href="css/dashboard.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/tech.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</head>
<body>
<!-- sidebar -->
<div class="sidebar" style="float: left;">
  <a href="interview.php"><i class="fa fa-fw fa-graduation-cap" style="color: white;font-size: 50px;text-align: center;padding-left: 40px;"></i><h5 style="text-decoration: none;color: white;text-align: center;">PREPARE FOR YOUR INTERVIEW</h5></a>
  <a href="tcs.php"><i class="fa fa-fw fa-briefcase"></i>TCS </a>
  <a href="wipro.php"><i class="fa fa-fw fa-briefcase "></i>WIPRO</a>
  <a href="infosys.php"><i class="fa fa-fw fa-briefcase"></i> INFOSYS</a>
  <a href="ibm.php"><i class="fa fa-fw fa-briefcase"></i>IBM</a>
  <a href="c.php"><i class="fa fa-fw fa-briefcase"></i> C</a>
  <a href="java.php"><i class="fa fa-fw fa-briefcase"></i>JAVA</a>
  <a href="os.php"><i class="fa fa-fw fa-briefcase "></i> OS</a>
  <a href="dbms.php"><i class="fa fa-fw fa-briefcase"></i> DBMS</a>
  <a href="sql.php"><i class="fa fa-fw fa-briefcase"></i> SQL</a>
  <a href="networking.php"><i class="fa fa-fw fa-briefcase"></i> NETWORKING</a>
  <a href="ds.php"><i class="fa fa-fw fa-briefcase"></i> DATA STRUCTURE</a>
  <a href="python.php"><i class="fa fa-fw fa-briefcase"></i>PYTHON</a>
  <a href="algo.php"><i class="fa fa-fw fa-briefcase"></i> ALGORITHM</a>
  <a href="#"> </a>
</div>
<div class="container-fluid interview_body clrbg">
<div class="container interview_container ">
	<div class="heading">JAVA INTERVIEW QUESTIONS</div>
	<span class="pic"><img src="././images/int.gif"></span>
<div class="ques">1.What is JVM?</div>
<div class="ans">The Java interpreter along with the runtime environment required to run the Java application in called as Java virtual machine(JVM)</div>

<div class="ques">2. What is the most important feature of Java?</div>
<div class="ans">Java is a platform independent language.</div>

<div class="ques">3. What do you mean by platform independence?</div>
<div class="ans">Platform independence means that we can write and compile the java code in one platform (eg Windows) and can execute the class in any other supported platform eg (Linux,Solaris,etc).</div>


<div class="ques">4. What is the difference between a JDK and a JVM?</div>
<div class="ans">JDK is Java Development Kit which is for development purpose and it includes execution environment also. But JVM is purely a run time environment and hence you will not be able to compile your source files using a JVM.</div>



<div class="ques">5. What is the base class of all classes?</div>
<div class="ans">java.lang.Object</div>



<div class="ques">6. What are the access modifiers in Java?</div>
<div class="ans">There are 3 access modifiers. Public, protected and private, and the default one if no identifier is specified is called friendly, but programmer cannot specify the friendly identifier explicitly.</div>



<div class="ques">7. What is are packages?</div>
<div class="ans">A package is a collection of related classes and interfaces providing access protection and namespace management.</div>



<div class="ques">8. What is meant by Inheritance and what are its advantages?</div>
<div class="ans"> Inheritance is the process of inheriting all the features from a class. The advantages of inheritance are reusability of code and accessibility of variables and methods of the super class by subclasses.</div>


<div class="ques">9. What is the difference between superclass and subclass?</div>
<div class="ans">A super class is a class that is inherited whereas sub class is a class that does the inheriting.</div>


<div class="ques">10. What is an abstract class?</div>
<div class="ans">An abstract class is a class designed with implementation gaps for subclasses to fill in and is deliberately incomplete.</div>


<div class="ques">11. What are the states associated in the thread?</div>
<div class="ans">Thread contains ready, running, waiting and dead states.</div>


<div class="ques">12. What is synchronization?</div>
<div class="ans">Synchronization is the mechanism that ensures that only one thread is accessed the resources at a time.</div>



<div class="ques">13. What is deadlock?</div>
<div class="ans">When two threads are waiting each other and can’t precede the program is said to be deadlock.</div>


<div class="ques">14. What is an applet?</div>
<div class="ans">Applet is a dynamic and interactive program that runs inside a web page displayed by a java capable browser</div>


<div class="ques">15. What is the lifecycle of an applet?</div>
<div class="ans"><pre>init() method - Can be called when an applet is first loaded
start() method - Can be called each time an applet is started.
paint() method - Can be called when the applet is minimized or maximized.
stop() method - Can be used when the browser moves off the applet’s page.
destroy() method - Can be called when the browser is finished with the applet.</pre></div>



<div class="ques">16. How do you set security in applets?</div>
<div class="ans">using setSecurityManager() method</div>


<div class="ques">17. What is a layout manager and what are different types of layout managers available in java AWT?</div>
<div class="ans"> A layout manager is an object that is used to organize components in a container. The different layouts are available are FlowLayout, BorderLayout, CardLayout, GridLayout and GridBagLayout</div>


<div class="ques">18. What is JDBC?</div>

<div class="ans">JDBC is a set of Java API for executing SQL statements. This API consists of a set of classes and interfaces to enable programs to write pure Java Database applications.</div>



<div class="ques">19. What are drivers available?</div>
<div class="ans">-a) JDBC-ODBC Bridge driver b) Native API Partly-Java driver
 c) JDBC-Net Pure Java driver d) Native-Protocol Pure Java driver</div>



<div class="ques">20. What is stored procedure?</div>
<div class="ans">Stored procedure is a group of SQL statements that forms a logical unit and performs a particular task. Stored Procedures are used to encapsulate a set of operations or queries to execute on database. Stored procedures can be compiled and executed with different parameters and results and may have any combination of input/output parameters.</div>



<div class="ques">21. What is the Java API?</div>
<div class="ans">The Java API is a large collection of ready-made software components that provide many useful capabilities, such as graphical user interface (GUI) widgets.</div>



<div class="ques">22. Why there are no global variables in Java?</div>
<div class="ans">Global variables are globally accessible. Java does not support globally accessible variables due to following reasons:
1)The global variables breaks the referential transparency
2)Global variables creates collisions in namespace.</div>



<div class="ques">23. What are Encapsulation, Inheritance and Polymorphism?</div>
<div class="ans"> Encapsulation is the mechanism that binds together code and data it manipulates and keeps both safe from outside interference and misuse. Inheritance is the process by which one object acquires the properties of another object. Polymorphism is the feature that allows one interface to be used for general class actions.</div>



<div class="ques">24. What is the use of bin and lib in JDK?</div>
<div class="ans">Bin contains all tools such as javac, appletviewer, awt tool, etc., whereas lib contains API and all packages.</div>

<div class="ques">25. What is method overloading and method overriding?</div>
<div class="ans">Method overloading: When a method in a class having the same method name with different arguments is said to be method overloading. Method overriding : When a method in a class having the same method name with same arguments is said to be method overriding.</div>

<div class="ques">26. What is the difference between this() and super()?</div>
<div class="ans">this() can be used to invoke a constructor of the same class whereas super() can be used to invoke a super class constructor.

 </div>

<div class="ques">27. What is Domain Naming Service(DNS)?</div>
<div class="ans">It is very difficult to remember a set of numbers(IP address) to connect to the Internet. The Domain Naming Service(DNS) is used to overcome this problem. It maps one particular IP address to a string of characters. For example, www. mascom. com implies com is the domain name reserved for US commercial sites, moscom is the name of the company and www is the name of the specific computer, which is mascom’s server.</div>

<div class="ques">28. What is URL?</div>
<div class="ans">URL stands for Uniform Resource Locator and it points to resource files on the Internet. URL has four components: http://www. address. com:80/index.html, where http - protocol name, address - IP address or host name, 80 - port number and index.html - file path.</div>

<div class="ques">29. What is RMI and steps involved in developing an RMI object?</div>
<div class="ans">RMI architecture consists of four layers and each layer performs specific functions: a) Application layer - contains the actual object definition. b) Proxy layer - consists of stub and skeleton. c) Remote Reference layer - gets the stream of bytes from the transport layer and sends it to the proxy layer. d) Transportation layer - responsible for handling the actual machine-to-machine communication.

 </div>

<div class="ques">31. What is a Java Bean?

</div>
<div class="ans">A Java Bean is a software component that has been designed to be reusable in a variety of different environments.</div>

<div class="ques">32. What are checked exceptions?</div>
<div class="ans">Checked exception are those which the Java compiler forces you to catch. e.g. IOException are checked Exceptions.

 </div>

<div class="ques">33. What are runtime exceptions?</div>
<div class="ans">Runtime exceptions are those exceptions that are thrown at runtime because of either wrong input data or because of wrong business logic etc. These are not checked by the compiler at compile time.

 </div>

<div class="ques">34. What is the difference between error and an exception?</div>
<div class="ans">An error is an irrecoverable condition occurring at runtime. Such as OutOfMemory error. These JVM errors and you can not repair them at runtime. While exceptions are conditions that occur because of bad input etc. e.g. FileNotFoundException will be thrown if the specified file does not exist. Or a NullPointerException will take place if you try using a null reference. In most of the cases it is possible to recover from an exception (probably by giving user a feedback for entering proper values etc.).</div>


<div class="ques">35. What is the purpose of finalization?</div>
<div class="ans">The purpose of finalization is to give an unreachable object the opportunity to perform any cleanup processing before the object is garbage collected. For example, closing a opened file, closing a opened database Connection.

 </div>



<div class="ques">36. What is the difference between yielding and sleeping?</div>
<div class="ans">When a task invokes its yield() method, it returns to the ready state. When a task invokes its sleep() method, it returns to the waiting state.</div>



<div class="ques">37. What is the difference between preemptive scheduling and time slicing?</div>
<div class="ans">Under preemptive scheduling, the highest priority task executes until it enters the waiting or dead states or a higher priority task comes into existence. Under time slicing, a task executes for a predefined slice of time and then reenters the pool of ready tasks. The scheduler then determines which task should execute next, based on priority and other factors.</div>



<div class="ques">38. What is mutable object and immutable object?</div>
<div class="ans">If a object value is changeable then we can call it as Mutable object. (Ex., StringBuffer, …) If you are not allowed to change the value of an object, it is immutable object. (Ex., String, Integer, Float, …)</div>



<div class="ques">39. What is the purpose of Void class?</div>
<div class="ans">The Void class is an uninstantiable placeholder class to hold a reference to the Class object representing the primitive Java type void.

 </div>




<div class="ques">40. What is JIT and its use?</div>
<div class="ans">Really, just a very fast compiler… In this incarnation, pretty much a one-pass compiler — no offline computations. So you can’t look at the whole method, rank the expressions according to which ones are re-used the most, and then generate code. In theory terms, it’s an on-line problem.

 </div>



<div class="ques">41. What is nested class?</div>
<div class="ans">If all the methods of a inner class is static then it is a nested class.

</div>



<div class="ques">42. What is Constructor?</div>
<div class="ans">A constructor is a special method whose task is to initialize the object of its class.
 It is special because its name is the same as the class name.
They do not have return types, not even void and therefore they cannot return values.
 They cannot be inherited, though a derived class can call the base class constructor.   
 Constructor is invoked whenever an object of its associated class is created.</div>



<div class="ques">43. What is the difference between a constructor and a method?</div>
<div class="ans">A constructor is a member function of a class that is used to create objects of that class. It has the same name as the class itself, has no return type, and is invoked using the new operator.
A method is an ordinary member function of a class. It has its own name, a return type (which may be void), and is invoked using the dot operator.</div>



<div class="ques">44. Difference between static and dynamic class loading.  </div>
<div class="ans">Static class loading: The process of loading a class using new operator is called static class loading. Dynamic class loading: The process of loading a class at runtime is called dynamic class loading.
Dynamic class loading can be done by using Class.forName(….).newInstance().</div>



<div class="ques">45. What are the different ways to handle exceptions?</div>
<div class="ans">There are two ways to handle exceptions,
1. By wrapping the desired code in a try block followed by a catch block to catch the exceptions. and
2. List the desired exceptions in the throws clause of the method and let the caller of the method handle those exceptions.</div>
























</div>	
</div>
</body>
</html>