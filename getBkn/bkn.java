public class Main {
    public static int getBkn(String skey) {
        int hashValue = 5381;
        for (char c : skey.toCharArray()) {
            hashValue += (hashValue << 5) + (int) c;
        }
        return hashValue & 2147483647;
    }
}