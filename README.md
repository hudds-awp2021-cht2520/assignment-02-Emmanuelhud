![JOBFINDRlogo](https://user-images.githubusercontent.com/79155600/141016359-185bd82e-c3fb-4b52-9024-9b28f41b51bf.png)




## About JOBFINDR

JOBFINDR is web application that was built with the intention of facilitating and simplifying the job-hunting process. The current job finding model that we must all endure involves having to painstakingly find contact information for different companies and reaching out to them to send them your CV. JOBFINDR elegantly nullifies this by condensing the process into one centralised application. JOBFINDR is user friendly, accessible and equips users with all they need to find their next job with ease and efficiency.  

To guarantee that JOBFINDR facilitates and simplifies the job-hunting process, various technologies have been used. These are:

- Xampp ~ xampp is a web server solution that enables users to create web applications offline. Xampp was imperative to the development of JOBFINDR as it was used to monitor the progress of the build and allow for incremental checks to be carried out and for milestones to be achieved and assessed.
- Laravel ~ this was used because it is one of the best web frameworks that allows for fast and efficient web application development.
- Visual Studio ~ this was used as it makes web application development easier by providing features such as compilers and completion tool amongst many more.
- GitHub ~ github was used because it’s a great way to work on the project as it allowed me to work collaboratively witch ease.
- phpMyAdmin and MySQL ~ phpMyAdmin is a software tool that was used to carry out necessary administration tasks for my web application. These tasks include, creating and editing a database and running queries. MySQL was used because it is a great database that had inclusive support for the development of my web application. 



JOBFINDR has implemented a range of features to ensure its usability and efficiency of finding a new job. These include:

- Persistent Storage (Database) ~ Different features of the website require data to be stored and retrieved from somewhere and so, the web application utilises a database, which is a form of persistent storage used to stores and retains data. The database will be used to store various data and data types from the web application.
- CRUD ~ JOBFINDR features all four crud operations, Create, Read, Update, Delete. 

The Create operation was implemented for the job creation where companies can create a new job by entering and job name, location and giving a detailed description. This will then create a new job record and it will be given a unique id and stored it in the database where it can retrieve and displayed on the jobs page. 

The Read operation was implemented to retrieve each Job record and its respective data for users to see all the available jobs that they can apply for. Unlike the create operation this does not require any input of new data.

The Update operation was implemented for when companies may need to change the details of their job for various reasons like if the location has changed. Once changes have been made to the field and updated, the fields will contain the new data.

The Delete operation was implemented to allow companies who put up a job listing to be able to delete the job if for example the job position was no longer vacant. When this operation is used, values will be removed, and the record deleted from the database.   

Where I used each crud function.
- Single Table (Jobs) ~ JOBFINDR displays multiple job listings to users, and these must be stored and retrieved from the database. As a result, to ensure effectively and efficiency JOBFINDR requires the need for a Job Table to store all the details of each job including the Job Name, Location of the job and a detailed Description. The data type for each field must also be appropriate for the data that will be inputted and so for the Name field was a String, the Location also String, and the Description is Text. The reasoning behind using a String for the Name and Location is because String is the equivalent of VARCHAR in MySQL, and it allows both numbers and letters to be used. This is an appropriate data type for this field because the Name of a job will include the company and possibly the salary which might have numbers. The same goes for the Location, which might include the postcode. Text is appropriate for the description because this will most likely consist of a large body of text to ensure that users of JOBFINDR are given adequate information about each job and its requirements.
- Linking Job Table with Secondary Table (User) ~ The JOBFINDR has included the feature of linking together the user and jobs table and this can be identified by the user user_id in the jobs table.


![user_id](https://user-images.githubusercontent.com/79155600/141002710-69c1d907-c89f-4079-9a6f-6c42779ee959.png)

- User Authentication ~ JOBFINDR requires users to log in before they can gain full access and reap the benefits of this elegant web application. When users initially access the application, they must fill out a login form or conversely register to be able to login and then gain access. They are required to provide a name, email address and a password when registering and their email and password to login. On registering, login details are submitted and sent to the User table in the database, and this is checked and authenticated when logging in to ensure that the user has registered their login details and can be granted authorised access.  

## JOBFINDR Installation

To run the application, you need to do a few things including configurations and install the necessary packages. This is how you do it:

Install the dev tools; node.js and npm. Once you have installed node and extracted the contents at the appropriate location, add node to you path by running this ‘set PATH=D:\node;%PATH%’ (or the appropriate drive) and run these commands in git-bash: ‘node -v’, ‘npm -v’.

Install tailwind from the root of you folder by issuing this command line in the git-bash terminal: ‘../../../node/npm install -D tailwindcss@latest postcss@latest autoprefixer@latest @tailwindcss/forms’. Then with the command ‘npx tailwind init’, initialise the tailwind package.

Once you have done this and made the necessary changes to webpack.mix and tailwind.config.js, build the CRUD by generating the controllers and editing the CRUD operations in the respective controllers. 

Finally, to build you assets, run this code in the git-bash terminal in the root of your folder: ‘npm run dev’

In the event of a failure, delete and re-install node and re-issue the command ‘npm install’ and ‘npm run dev’.

## JOBFINDR Usage

When you initially access the website, you are required to login. Enter correct login details and don’t leave any field empty. These login details will give you full access JOBFINDR.


![image1 1](https://user-images.githubusercontent.com/79155600/141001733-8495a46b-fe1d-4bb8-a1f2-61a2317f565d.png)

![image1 2](https://user-images.githubusercontent.com/79155600/141001852-10f4d2b1-4634-4993-8aba-fe98b5e64720.png)

You can register if you don’t have login details. Click the register button in the nav bar to go to the register page and fill in the form. Don’t leave any fields empty.


![image2 1](https://user-images.githubusercontent.com/79155600/141001888-cd417796-9fbd-44e8-85b4-f6628c244f3d.png)

![image2 2](https://user-images.githubusercontent.com/79155600/141001959-486121e2-771c-49f7-a10b-bb5fd501b82e.png)

![image2 3](https://user-images.githubusercontent.com/79155600/141001992-b98cbda1-8f03-4605-96e0-346224ff9d34.png)

![image2 4](https://user-images.githubusercontent.com/79155600/141002022-d43f2dde-5943-4e8f-ba18-3d4bc3b8f409.png)

Once the user has entered valid login credentials, they will be granted access to the web application and taken to the home page.

![image3 1](https://user-images.githubusercontent.com/79155600/141002051-e7261208-99b7-4eb3-980b-88f4d37f8e4a.png)

The user can go to the jobs page and views all the avails jobs currently on JOBFINDR. When they click on a job, they can see the full details of the job including the name location and description.


![image4 1](https://user-images.githubusercontent.com/79155600/141002098-9203b7d2-8236-4755-878b-953972f7ffbe.png)

![image4 2](https://user-images.githubusercontent.com/79155600/141002148-cf490e24-6083-403d-a76d-d5d2290dc091.png)

A user can create a job listing by selecting the ‘Create a job button’ in the nav bar. To create a job, they must completely fill out the form. Their created job will then be displayed in the jobs page and the jobs database.


![image5 1](https://user-images.githubusercontent.com/79155600/141002194-d76c9efd-7794-4e11-b0e9-4538e56713f3.png)

![image5 2](https://user-images.githubusercontent.com/79155600/141002221-b1c5862d-f803-4cf8-8167-7557c3d08190.png)

![image5 3](https://user-images.githubusercontent.com/79155600/141002260-6880817f-b134-472c-a1ff-4aff2f06b301.png)

![image5 4](https://user-images.githubusercontent.com/79155600/141002289-5df58646-2f78-47fe-8f76-4e700a12c861.png)

The user can make changes by using the buttons, once a new job has been created.


![image6 1](https://user-images.githubusercontent.com/79155600/141002325-c41db318-f740-4ae0-ab6c-769d62f30604.png)

![image6 2](https://user-images.githubusercontent.com/79155600/141002367-039a7dd1-f406-4f23-a27d-2c119d7a063f.png)

When a user has finishing using the web application they can log out.


![image7 1](https://user-images.githubusercontent.com/79155600/141002419-c7d0a721-e6b0-4bd6-a191-2e8177043673.png)



### JOBFINDR Testing

Various tests need to be run to assess the validity of the code and if the different functions and CRUD operations work as they should.

To run the tests, you enter this command into git-bash: php artisan test.

The first test was to test if the get function works.


![test1](https://user-images.githubusercontent.com/79155600/141007023-622e98f7-d1d5-42b7-ae88-44b706f571cb.png)

As you can see, the test passed!

## JOBFINDR Road Map

JOBFINDR, whilst being an effective web application can be improved in many different aspects including in the development and testing process. 

Development Improvements

- JOBFINDR could be taken a step further by implementing authorisation. This would mean that select users could have access to different web pages. This would be useful we could distinguish between different users of the websites. There would be users who are specifically looking for jobs and users who may be recruiters from companies that make the job listings and handle the applications. To implement this, we specify in the database that there are two different types of users and then users who have admin access can access the create page.  
- More CSS could have been added to make the website look better and more aesthetically pleasing. This would have been ideal as aesthetics is a big part of the user experience and making it better.

Testing Improvements

- To further ensure that all the functions and CRUD operations are working properly, I could have made more tests. To do this, I could create tests to test all the controllers in the project including the login/logout controller, user and job. Once these tests were created, like with the get test, I run the command ‘php artisan test’ to run the test and assess whether they pass. Doing this would ensure all the code is void of any errors and that the web application is usable and less likely to run into any problems.


## JOBFINDR Notable Mentions

The JOBFINDR logo was provided under the Free License by Vecteezy at [Vecteezy.com](https://www.vecteezy.com/)

The JOBFINDR README file was made using the Laravel README file as a template.

The example jobs on JOBFINDR were provided by [Indeed]( https://uk.indeed.com/jobs?q=Full%20Time&l=Leeds%2C%20West%20Yorkshire&vjk=5520ebb96b39ef28).
