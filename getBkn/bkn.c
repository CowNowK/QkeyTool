#include <stdio.h>
#include <string.h>

int getBkn(char* skey) {
    int hashValue = 5381;
    int len = strlen(skey);
    for (int i = 0; i < len; i++) {
        hashValue += (hashValue << 5) + (int) skey[i];
    }
    return hashValue & 2147483647;
}