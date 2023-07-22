function getBkn(skey) {
    let hashValue = 5381;
    for (let i = 0; i < skey.length; i++) {
      hashValue += (hashValue << 5) + skey.charCodeAt(i);
    }
    return hashValue & 2147483647;
  }