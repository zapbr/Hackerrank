### [Challenge Name: Designer PDF Viewer](/challenges/designer-pdf-viewer)


When you select a contiguous block of text in a PDF viewer, the selection is highlighted with a blue rectangle. In a new kind of PDF viewer, the selection of each word is independent of the other words; this means that each rectangular selection area forms independently around each highlighted word. For example: 

![PDF-highighting.png](https://s3.amazonaws.com/hr-challenge-images/22869/1471640108-6c01750b16-PDF-highighting.png)

In this type of PDF viewer, the *width* of the rectangular selection area is equal to the number of letters in the word times the width of a letter, and the *height* is the maximum height of any letter in the word. 

Consider a word consisting of lowercase English alphabetic letters, where each letter is $1 mm$ wide. Given the height of each letter in millimeters ($mm$), find the total area that will be highlighted by blue rectangle in $mm^{2}$ when the given word is selected in our new PDF viewer.
