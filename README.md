<h1>Test</h1>
The test will be made of 4 exercise.
PHP required
you can use this code to check first 3 excersice: vendor/bin/phpunit ./tests/Unit/WhitezipTest.php
Make various commits, and call a branch as test/{name}-{date}
The Controller for the test is called testController.php
The unit test is called WhitezipTest.php (Don't modify this file)
<ul>
<li>Get the N first Fibonacci numbers</l1>
<li>Check if is a Leap Year</l1>
<li>Convert Text to hexadecimal</l1>
<li>Show a view (basic html stuff, no need of css).
<ul>
<li>The page will contain:
<ul>
<li>Show Users</li>
<li>Show Users job position</li>
<li>Show Users Bosses/Employee History</li>
<li>Create users and attach to Boss/Employees and Job title(if not, it should be create automatically)</li>
<li>On the page should be able to see actual(Blue Color)/Past(Red Color) user Bosses/Employees</li>
</ul>
</li>
<li>Create Models:
<ul>
<li>Users (Id, Name, LastName, jobPositionId)</li>
<li>job position (id, Name)</li>
<li>User Relation (employeeId, BossId, Current) -> Employee and Boss users</li>
</ul>
</li>
<li>Relations Must Be:
<ul>
<li>User has one Job Position</li>
<li>User can have Many Employee/Bosses</li>
</ul>
</li>
Additional Information:
<ul>
<li>Is just required 1 grade Boss/Employee</li>
<li>The Job tittle can be shared with many users</li>
<li>Migration and seed required</li>
</ul>
</ul>
</l1>
</ul>