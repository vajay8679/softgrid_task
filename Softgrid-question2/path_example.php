<?php

class Path {
    private $currentPath;

    public function __construct($path) {
        $this->currentPath = '/';
        $this->cd($path);
    }

    public function cd($newPath) {
        $newPath = trim($newPath, '/');
        $newPathParts = explode('/', $newPath);

        foreach ($newPathParts as $part) {
            if ($part === '..') {
                $this->moveUp();
            } elseif ($part !== '') {
                $this->moveDown($part);
            }
        }
    }

    private function moveUp() {
        $parts = explode('/', $this->currentPath);
        array_pop($parts);
        $this->currentPath = implode('/', $parts);
    }

    private function moveDown($part) {
        if ($this->currentPath !== '/') {
            $this->currentPath .= '/';
        }
        $this->currentPath .= $part;
    }

    
    public function getCurrentPath() {
        return $this->currentPath;
    }
}

$path = new Path('/a/b/c/d');
$path->cd('../x');
echo $path->getCurrentPath() . "\n"; // Should display '/a/b/c/x'

?>