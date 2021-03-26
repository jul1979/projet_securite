#ifndef UTILS_H
#define UTILS_H
#include<string>
#include<cctype>





class utils{

private:
char * arrayofchar;


public:
 utils();
 void removePunctuation(std::string &line);
 void removeSpaces(char *str);
 void transformStringtoCharArray(std::string line,char *);
 void print(char cstr[]);
 void keepalphanOnly(char *str);
 bool my_isalnum(char ch);


};

#endif // UTILS_H
