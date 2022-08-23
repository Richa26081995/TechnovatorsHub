<!DOCTYPE html>
<html>
<head>
	<title>C QUESTIONS</title>
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
	<div class="heading"> INTERVIEW QUESTIONS</div>
	<span class="pic"><img src="././images/clogo.png"></span>


<div class="ques">1) What is the use of printf() and scanf() functions?</div>
<div class="ans"><pre>printf(): The printf() function is used to print the 
  integer,character, float and string values on to the screen.

Following are the format specifier:

%d: It is a format specifier used to print an integer value.
%s: It is a format specifier used to print a string.
%c: It is a format specifier used to display a character value.
%f: It is a format specifier used to display a floating point value.
scanf(): The scanf() function is used to take input from the user</pre></div>


<div class="ques">2)What is the use of a static variable in C?</div>
<div class="ans"><pre>Following are the uses of a static variable:

A variable which is declared as static is known as a static variable.
The static variable retains its value between multiple function calls.
Static variables are used because 
the scope of the static variable is available in the entire program.
So, we can access a static variable anywhere in the program.
The static variable is initially initialized to zero.
If we update the value of a variable, then the updated value is assigned.
The static variable is used as a common value which is shared by all the methods.
The static variable is initialized only once in the memory heap
to reduce the memory usage.</pre></div>

<div class="ques">3) What is the use of the function in C?</div>
<div class="ans"><pre>Uses of C function are:

C functions are used to avoid the rewriting the same code again and again in our program.
C functions can be called any number of times from any place of our program.
When a program is divided into functions,
 then any part of our program can easily be tracked.
C functions provide the reusability concept, i.e.,
it breaks the big task into smaller tasks so that it makes the C program more understandable.</pre></div>

<div class="ques">4) What is recursion in C?</div>
<div class="ans"><pre>When a function calls itself, and this process is known as recursion. 
The function that calls itself is known as a recursive function.

Recursive function comes in two phases:

Winding phase
Unwinding phase
Winding phase: When the recursive function calls itself,
and this phase ends when the condition is reached.

Unwinding phase: Unwinding phase starts when the condition is reached, 
and the control returns to the original call.

Example of recursion:--


int calculate_fact(int);  
int main()  
{  
 int n=5,f;  
 f=calculate_fact(n); // calling a function  
 printf("factorial of a number is %d",f);  
  return 0;  
}  
int calculate_fact(int a)  
{  
  if(a==1)  
  {  
      return 1;  
  }  
  else  
  return a*calculate_fact(a-1); //calling a function recursively.  
   } 


Output:

factorial of a number is 120</pre></div>

<div class="ques">5) What is an array in C?</div>
<div class="ans"><pre>An Array is a group of similar types of elements.
  It has a contiguous memory location. It makes the code optimized,
  easy to traverse and easy to sort. 
  The size and type of arrays cannot be changed after its declaration.

Arrays are of two types:

One-dimensional array: One-dimensional array is an array
that stores the elements one after the another.

Syntax:
data_type array_name[size]; 


Multidimensional array: Multidimensional array is an array that contains more than one array.

Syntax:
data_type array_name[size];  


Example of an array:

#include <stdio.h>  
int main()  
{  
   int arr[5]={1,2,3,4,5}; //an array consists of five integer values.  
   for(int i=0;i<5;i++)  
   {  
       printf("%d ",arr[i]);  
   }  
    return 0;  
}


Output:

1 2 3 4 5
More details.
</pre></div>

<div class="ques">6) What is a pointer in C?</div>
<div class="ans"><pre>A pointer is a variable that refers to the address of a value.
 It makes the code optimized and makes the performance fast.
  Whenever a variable is declared inside a program,
  then the system allocates some memory to a variable.
  The memory contains some address number.
  The variables that hold this address number is known as the pointer variable.

For example:

Data_type *p;  </pre></div>

<div class="ques">7) What is the usage of the pointer in C?</div>
<div class="ans"><pre>Accessing array elements:
Pointers are used in traversing through an array of integers and strings.
The string is an array of characters which is terminated by a null character '\0'.

Dynamic memory allocation: Pointers are used in allocation and deallocation of memory
during the execution of a program.

Call by Reference: The pointers are used to pass a reference of a variable
to other function.

Data Structures like a tree, graph, linked list, etc.:
The pointers are used to construct different data structures like tree, graph, linked list, etc.</pre></div>

<div class="ques">8) What is a NULL pointer in C?</div>
<div class="ans"><pre>A pointer that doesn't refer to any address of value but NULL is known as a NULL pointer.
When we assign a '0' value to a pointer of any type,
then it becomes a Null pointer.</pre></div>

<div class="ques">9) What is a far pointer in C?</div>
<div class="ans"><pre>A pointer which can access all the 16 segments
(whole residence memory) of RAM is known as far pointer.
A far pointer is a 32-bit pointer that obtains information
outside the memory in a given section.</pre></div>

<div class="ques">10) What is pointer to pointer in C?</div>
<div class="ans"><pre>In case of a pointer to pointer concept,
 one pointer refers to the address of another pointer.
 The pointer to pointer is a chain of pointers.
 Generally, the pointer contains the address of a variable.
 The pointer to pointer contains the address of a first pointer.
  Let's understand this concept through an example:

 int main()  
{  
    int a=10;  
    int *ptr,**pptr; // *ptr is a pointer and **pptr is a double pointer.  
    ptr=&a;  
    pptr=&ptr;  
    printf("value of a is:%d",a);  
    printf("\n");  
    printf("value of *ptr is : %d",*ptr);  
    printf("\n");  
    printf("value of **pptr is : %d",**pptr);  
    return 0;  
}  

In the above example,
 pptr is a double pointer pointing to the address of the ptr variable
 and ptr points to the address of 'a' variable.</pre></div>


<div class="ques">11) What is static memory allocation?</div>
<div class="ans"><pre>In case of static memory allocation,
memory is allocated at compile time,
and memory can't be increased while executing the program.
It is used in the array.
The lifetime of a variable in static memory is the lifetime of a program.
The static memory is allocated using static keyword.
The static memory is implemented using stacks or heap.
The pointer is required to access the variable present in the static memory.
The static memory is faster than dynamic memory.
In static memory, more memory space is required to store the variable.</pre></div>

<div class="ques">12) What is dynamic memory allocation?</div>
<div class="ans"><pre>In case of dynamic memory allocation,
memory is allocated at runtime and memory can be increased
while executing the program. It is used in the linked list.
The malloc() or calloc() function is required to allocate
the memory at the runtime.
An allocation or deallocation of memory is done at the
execution time of a program.
No dynamic pointers are required to access the memory.
The dynamic memory is implemented using data segments.
Less memory space is required to store the variable.</pre></div>

<div class="ques">13)What is the structure?</div>
<div class="ans"><pre>The structure is a user-defined data type that allows storing
multiple types of data in a single unit.
It occupies the sum of the memory of all members.
The structure members can be accessed only through structure variables.
Structure variables accessing the same structure
but the memory allocated for each variable will be different.

Syntax of structure

struct structure_name  
{  
  Member_variable1;  
 Member_variable2  
.  
.  
}[structure variables];  </pre></div>

<div class="ques">14) What is a union?</div>
<div class="ans"><pre>The union is a user-defined data type that allows storing multiple types of data in a single unit.
However, it doesn't occupy the sum of the memory of all members.
It holds the memory of the largest member only.
In union, we can access only one variable at a time
as it allocates one common space for all the members of a union.

Syntax of union

union union_name  
{  
Member_variable1;  
Member_variable2;  
.  
.  
Member_variable n;  
}[union variables];  </pre></div>

<div class="ques">15) What is an auto keyword in C?</div>
<div class="ans">In C, every local variable of a function is known as an automatic (auto) variable. Variables which are declared inside the function block are known as a local variable. The local variables are also known as an auto variable. It is optional to use an auto keyword before the data type of a variable. If no value is stored in the local variable, then it consists of a garbage value.</div>

<div class="ques">16) What is a token?</div>
<div class="ans"><pre>The Token is an identifier.
It can be constant, keyword, string literal, etc.
A token is the smallest individual unit in a program. C has the following tokens:

Identifiers: Identifiers refer to the name of the variables.

Keywords: Keywords are the predefined words that are explained by the compiler.

Constants: Constants are the fixed values that cannot be changed
during the execution of a program.

Operators: An operator is a symbol that performs the particular operation.

Special characters: All the characters except alphabets and digits
are treated as special characters.</pre></div>

<div class="ques">17) What is command line argument?
  </div>
<div class="ans"><pre>The argument passed to the main() function
while executing the program is known as command line argument.

For example:

main(int count, char *args[]){  
//code to  be executed  
}</pre></div>

<div class="ques">18) What is typecasting?</div>
<div class="ans"><pre>The typecasting is a process of converting one data type into another is known as typecasting.
If we want to store the floating type value to an int type,
then we will convert the data type into another data type explicitly.

Syntax

(type_name) expression;  </pre></div>


<div class="ques">19) What is an infinite loop?
  </div>
<div class="ans"><pre>A loop running continuously for an indefinite number of times is called the infinite loop.

Infinite For Loop:

for(;;){  
//code to be executed  
} 

Infinite While Loop:

while(1){  
//code to be executed  
}  

Infinite Do-While Loop:

do{  
//code to be executed  
}while(1);</pre></div>


<div class="ques">20) Write a program to print "hello world" without using a semicolon?
   </div>
<div class="ans"><pre>      
void main(){      
 if(printf("hello world")){} // It prints the ?hello world? on the screen.  
}  </pre></div>






