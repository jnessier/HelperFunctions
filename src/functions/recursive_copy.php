<?php

/**
 * Recursive copy of directory.
 *
 * @param string $sourcePath Source directory path
 * @param string $destPath   Destination directory path
 *
 * @return bool
 */
function recursive_copy(string $sourcePath, string $destPath): bool
{
    if (is_dir($sourcePath) && (is_dir($destPath) || mkdir($destPath))) {
        $sourceHandle = opendir($sourcePath);

        while ($file = readdir($sourceHandle)) {
            if ('.' === $file || '..' == $file) {
                continue;
            }

            $sourceFile = normalize_path($sourcePath.DIRECTORY_SEPARATOR.$file);
            $destFile = normalize_path($destPath.DIRECTORY_SEPARATOR.$file);

            if (is_dir($sourceFile)) {
                recursive_copy($sourceFile, $destFile);
            } else {
                copy($sourceFile, $destFile);
            }
        }

        closedir($sourceHandle);

        return true;
    }

    return false;
}
