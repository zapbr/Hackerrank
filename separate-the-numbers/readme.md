### [Challenge Name: Separate the Numbers](/challenges/separate-the-numbers)


A numeric string, $s$, is *beautiful* if it can be split into a sequence of two or more positive integers, $a_1,a_2, \ldots ,a_{n}$, satisfying the following conditions:

1. $a_i-a_{i-1}=1$ for any $1 < i \le n$ (i.e., each element in the sequence is $1$ more than the previous element).
2. *No $a_i$ contains a leading zero.* For example, we can split $s = 10203$ into the sequence $\{1, 02, 03\}$, but it is *not* beautiful because $02$ and $03$ have leading zeroes.
3. *The contents of the sequence cannot be rearranged.* For example, we can split $s = 312$ into the sequence $\{3, 1, 2\}$, but it is not beautiful because it breaks our first constraint (i.e., $1 - 3 \ne 1$).

The diagram below depicts some beautiful strings:

![image](https://s3.amazonaws.com/hr-assets/0/1486398483-1b25a912c1-Separate.png)

You must perform $q$ queries, where each query consists of some string $s$. For each query, print whether or not the string is beautiful on a new line. If it's beautiful, print ``YES x``, where $x$ is the first number of the increasing sequence (if there are multiple such values of $x$, choose the smallest); otherwise, print `NO` instead.
