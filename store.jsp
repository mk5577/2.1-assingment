<%@ page import="java.sql.*"%>

<%

String name=request.getParameter("rname");
String pass=request.getParameter("pwd");
String gender=request.getParameter("gend");
String email=request.getParameter("em");
String phone=request.getParameter("phn");

out.println("Hello"+"\t"+name+"\t");

try
	{

    Class.forName("oracle.jdbc.driver.OracleDriver");  
		Connection con=DriverManager.getConnection("jdbc:oracle:thin:@LAPTOP-60VBUG3U:1521:xe","Megha","Megha"); 


	PreparedStatement ps=con.prepareStatement("insert into Student values (?,?,?,?,?)");
		  ps.setString(1, name); 
		  ps.setString(2, pass);
		  ps.setString(3, gender);
		  ps.setString(4, email);
		  ps.setString(5, phone);

		  int res=ps.executeUpdate();
		  

		  if (res==0) 
			  out.print("Record not inserted"); 
		  else
			  out.print("Successful");
			
	}

catch(Exception e)
	{
	System.out.println(e);
	}



%>