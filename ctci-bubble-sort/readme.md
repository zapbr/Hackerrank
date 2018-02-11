### [Challenge Name: Sorting: Bubble Sort](https://www.hackerrank.com/challenges/ctci-bubble-sort)


Consider the following version of Bubble Sort:

```java
for (int i = 0; i < n; i++) {
    
    for (int j = 0; j < n - 1; j++) {
        // Swap adjacent elements if they are in decreasing order
        if (a[j] > a[j + 1]) {
            swap(a[j], a[j + 1]);
        }
    }
    
}
```

**Task**	
Given an $n$-element array, $A = a_0, a_1, \ldots, a_{n - 1} $, of distinct elements, sort array $A$ in ascending order using the *Bubble Sort* algorithm above. Once sorted, print the following three lines:

1. `Array is sorted in numSwaps swaps.`, where $numSwaps$ is the number of swaps that took place.
2. `First Element: firstElement`, where $firstElement$ is the *first* element in the sorted array.
3. `Last Element: lastElement`, where $lastElement$ is the *last* element in the sorted array.
    
**Hint:** To complete this challenge, you must add a variable that keeps a running tally of *all* swaps that occur during execution. 
