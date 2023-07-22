#import <Foundation/Foundation.h>

NSInteger getBkn(NSString *skey) {
    NSInteger hashValue = 5381;
    NSUInteger length = [skey length];
    for (NSUInteger i = 0; i < length; i++) {
        unichar c = [skey characterAtIndex:i];
        hashValue += (hashValue << 5) + (NSInteger)c;
    }
    return hashValue & 2147483647;
}