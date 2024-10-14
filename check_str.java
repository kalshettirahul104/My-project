import java.util.*;

public class check_str{
public static void main(String args[]){
  
 String str =" i live in pune";
 char  arr[]= str.toCharArray();
  System.out.println(str);
  int a =0;
for (int i = 0; i < str.length(); i++) {
    if(str.charAt(i) =='e')  
    {
        a++;
    }    
 }
 System.out.println("this is a count p is :" + a);
}
}