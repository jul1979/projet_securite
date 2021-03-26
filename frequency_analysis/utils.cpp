#include "utils.h"
#include<algorithm>
#include<iostream>
#include<cstring>

utils::utils()
{

}


//unused so far!
void utils::removePunctuation(std::string & str )
{
   // remove(str.begin(), str.end(), ' ');
    removeSpaces(&str.at(0));
    for (size_t i = 0, len = str.size(); i < len; i++)
        {
            // check whether parsing character is punctuation or not
            if (ispunct(str[i]))
            {
                str.erase(i--, 1);
                len = str.size();
            }
        }
}


// Function to remove all spaces from a given string
void utils::removeSpaces(char *str)
{
    // To keep track of non-space character count
    int count = 0;
   // Traverse the given string. If current character
   // is not space, then place it at index 'count++'
    for (int i = 0; str[i]; i++)
        if (str[i] != ' ')
            str[count++] = str[i]; // here count is
                                   // incremented
    str[count] = '\0';
}


void utils::transformStringtoCharArray(std::string line,char * array)
{
  //size_t size=line.length();
 // char array[size+1];
  strcpy(array,line.c_str());
}

void utils::print(char cstr[])
{
    int size=static_cast<int>(strlen(cstr));
    for (int i=0;i<size;i++) {
    std::cout<<cstr[i];
    }
    std::cout<<std::endl;
}

void utils::keepalphanOnly(char* str)
{
    // To keep track of non-space character count
    int count = 0;
   // Traverse the given string. If current character
   // is not space, then place it at index 'count++'
    for (int i = 0; str[i]; i++)
        if (isalnum(str[i]) )
            str[count++] = str[i]; // here count is
                                   // incremented
           str[count] = '\0';
 }

bool utils::my_isalnum(char ch)
{
    return std::isalnum(static_cast<unsigned char>(ch));
}
