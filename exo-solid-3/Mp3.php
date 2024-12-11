<?php

require_once 'MusicType.php';

class Mp3 extends MusicType
{
    public function listen()
    {
        $extension = pathinfo($this->filename, PATHINFO_EXTENSION);
        if ($extension === '') {
            throw new UnknownExtensionException("Aucune extension trouvée pour le fichier " . $this->filename);
        }
        if ($extension !== 'mp3') {
            throw new InvalidExtensionException("Fichier Mp3 attendu mais '$extension' obtenu");
        }

        return 'Lecture du fichier Mp3 ' . $this->filename;
    }
}
?>