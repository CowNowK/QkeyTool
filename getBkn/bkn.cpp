#include <iostream>
#include <string>

int getBkn(std::string skey) {
    int hash_value = 5381;
    for (char c : skey) {
        hash_value += (hash_value << 5) + static_cast<int>(c);
    }
    return hash_value & 2147483647;
}