def getBkn(skey)
  hash_value = 5381
  skey.each_char do |c|
    hash_value += (hash_value << 5) + c.ord
  end
  hash_value & 2147483647
end