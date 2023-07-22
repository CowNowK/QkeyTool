public long getBkn(string skey){
    var hash = 5381;
    for (int i = 0, len = skey.Length; i < len; ++i)
    {
        hash += (hash << 5) + (int)skey[i];
    }
    return hash & 2147483647;
}
