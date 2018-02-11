### [Challenge Name: HackerRank in a String!](https://www.hackerrank.com/challenges/hackerrank-in-a-string)


We say that a string, $s$, contains the word `hackerrank` if a [subsequence](https://en.wikipedia.org/wiki/Subsequence) of the characters in $s$ spell the word `hackerrank`. For example, `haacckkerrannkk` does contain `hackerrank`, but `haacckkerannk` does not (the characters all appear in the same order, but it's missing a second `r`).

More formally, let $p_0, p_1, \cdots, p_9$ be the respective indices of `h`, `a`, `c`, `k`, `e`, `r`, `r`, `a`, `n`, `k` in string $s$. If $p_0 < p_1 < p_2 < \cdots < p_9$ is true, then $s$ contains `hackerrank`.

You must answer $q$ queries, where each query consists of a string, $s$. For each query, print `YES` on a new line if $s$ contains `hackerrank`; otherwise, print `NO` instead.
