#include <iostream>
#include<sstream>
#include<fstream>
#include<iomanip>
#include"utils.h"

using namespace std;

int main()
{
    ifstream infile;
    fstream outfile;
    infile.open("C:\\Users\\Jules Cesar\\Documents\\SECURITE\\frequency_analysis\\texte.txt");
    string line;
    unsigned lineno=0;
    utils tools;

    if(infile){
        while (getline(infile,line)) {

            cout<<left;
            cout<<setw(5)<<lineno<<" ";
            cout<<line<<endl;
            char process[line.size()+1];
            tools.transformStringtoCharArray(line,process);
            tools.removeSpaces(process);
            tools.keepalphanOnly(process);
            lineno++;
            cout<<"after processing :"<<endl;
            tools.print(process);

        }
    }
    infile.close();
    return 0;
}
