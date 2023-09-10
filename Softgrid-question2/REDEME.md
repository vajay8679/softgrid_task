2. Write a function that provides change directory (cd) function for an abstract file system.
NOTE: 
Parent directory is addressable as '..'.
The function should support both relative and absolute paths.
Do not use built-in path-related functions.

For example:

$path = new Path('/a/b/c/d');
$path->cd('../x')
echo $path->currentPath;

should display '/a/b/c/x'.



#Run below command in your root directory to run this project :

php path_example.php 

#we will get below output :

/a/b/c/x