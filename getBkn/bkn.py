def getBkn(skey):
    hash_value = 5381
    for char in skey:
        hash_value += (hash_value << 5) + ord(char)
    return hash_value & 2147483647