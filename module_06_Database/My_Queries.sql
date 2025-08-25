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


-- Q1(C): Find average pending balance from active accounts,
-- grouped by branch, where avg pending balance < 4300
SELECT OPEN_BRANCH_ID, AVG(PENDING_BALANCE) AS AVG_Pending_Balance
FROM account
WHERE STATUS = 'ACTIVE'
GROUP BY OPEN_BRANCH_ID
HAVING AVG(PENDING_BALANCE) < 4300;

