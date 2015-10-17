<?php
/*
War between two tribes

The inhabitants of BitVille and ByteVille are engaged in a periodic wars. Last month, BitVille successfully launched and orbited a spy telescope called the Hobble Scope. The purpose of the Hobble Scope is to count the number of Byte Warriors in ByteVille. The Hobble Scope, however, had problems due to poor quality control during its construction. Its primary lens was contaminated with bugs which block part of each image, and its focusing mechanism malfunctioned so that images vary in size and sharpness.

Each image is square and each pixel (or cell) contains either a 0 or a 1. The unique Hobble Scope Camera (HSC) records at each pixel location a 1 if part or all of a Byte Warrior is present and a 0 if any other object, including a bug, is visible. The programmers must assume the following:

A Byte warrior is represented by at least a single binary one.
Cells that contain binary ones that are adjacent or diagonal to each other comprise one Byte Warrior. A very large image of one Byte Warrior might contain all ones.
Distinct Byte Warriors do not touch one another.
There is no wrap-around. Pixels on the bottom are not adjacent to the top and the left is not adjacent to the right.
Input
The first line of the input contains N, the dimension of the image. It is followed by N rows, each line containing N digits. Each digit is either 0 or 1.

Output
The output should be a single number specifying the number of unique Byte Warriors in the image.

Constraint:
1 <= N <= 500

Sample Input(Plaintext Link)
 6
100100
001010
000000
110000
111000
010100
Sample Output(Plaintext Link)
 3
 */