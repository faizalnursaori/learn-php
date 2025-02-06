<?php

/*
class Conflict{

}

class Conflict{
    
}

Kalau ada dua class begitu akan conflict
*/

//Untuk menghindari conflict tersebut maka gunakan Namespace
namespace Data\One {
    class Conflict {}

    class Sample {}

    class Dummy {}
}

namespace Data\Two {
    class Conflict {}
}
