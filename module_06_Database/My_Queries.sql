-- Question 1: 
-- (A): Find 3rd lowest salary from employee table
SELECT EMP_ID, FIRST_NAME, LAST_NAME, salary FROM employee
ORDER BY salary ASC
LIMIT 1
OFFSET 2;


-- Q1(B): Find 2nd lowest salary using subquery
SELECT EMP_ID, FIRST_NAME, LAST_NAME, salary
FROM employee
WHERE salary = (
	SELECT MIN(salary)
    FROM employee
    WHERE salary > (
    	SELECT MIN(salary) FROM employee
    )
);




