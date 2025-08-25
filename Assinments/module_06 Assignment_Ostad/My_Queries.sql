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



-- Q1(D): Pagination query | OFFSET starts from 0
-- Example of showing 6 employees per page | Total 18 rows here

-- Page 1: Start from row 0 | shows 6 rows (Employee ID 1 to 6)
SELECT * FROM employee
LIMIT 6
OFFSET 0;

-- Page 2: Start from row 6 | shows next 6 rows (Employee ID 7 to 12)
SELECT * FROM employee
LIMIT 6
OFFSET 6;

-- Page 3: Start from row 12 | shows next 6 rows (Employee ID 13 to 18)
SELECT * FROM employee
LIMIT 6
OFFSET 12;



-- Q1(E): Count total number of branches including head branch
SELECT COUNT(*) AS Total_Branches FROM branch;