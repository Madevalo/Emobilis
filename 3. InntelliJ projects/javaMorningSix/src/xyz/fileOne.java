package xyz;

public class fileOne {
    String name,email,password;

    public fileOne(String name, String email, String password) {
        this.name = name;
        this.email = email;
        this.password = password;
    }
    public String toString(){
        return "\n\n"+name+" "+email+" "+password+"\n\n";
    }
}
