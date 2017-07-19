/*
 * @(#)ProgrammeServlet.java	1.0 2007/10/31
 * 
 * Copyright (c) 2007 Sara Bouchenak.
 */
import javax.servlet.*;
import javax.servlet.http.*;
import java.io.IOException;

/**
 * Proramme Servlet.
 *
 * This servlet dynamically returns the theater program.
 *
 * @author <a href="mailto:Sara.Bouchenak@imag.fr">Sara Bouchenak</a>
 * @version 1.0, 31/10/2007
 */

public class ProgrammeServlet extends HttpServlet {

   /**
    * HTTP GET request entry point.
    *
    * @param req	an HttpServletRequest object that contains the request 
    *			the client has made of the servlet
    * @param res	an HttpServletResponse object that contains the response 
    *			the servlet sends to the client
    *
    * @throws ServletException   if the request for the GET could not be handled
    * @throws IOException	   if an input or output error is detected 
    *					   when the servlet handles the GET request
    */
    public void doGet(HttpServletRequest req, HttpServletResponse res)
	throws ServletException, IOException
    {
        ServletOutputStream out = res.getOutputStream();   

	  res.setContentType("text/html");

	 out.println("<HEAD><TITLE> Programme de la saison </TITLE></HEAD>");
	  out.println("<BODY style='background: url(../images/iBody/zz.png) center 0 no-repeat #000; border:0; font:14px Arial, Helvetica, sans-serif; color:#7f7f7f; line-height:25px; min-width:960px;' bgproperties=\"fixed\"");// background=\"/images/rideau.JPG\">");
	  out.println("<font color=\"#FFFFFF\"><h1> Programme de la saison </h1>");
      /*out.println("<head>");
            out.println("<title>Programme de la saison</title>");
            out.println("<meta http-equiv='content-type' content='text/html;charset=utf-8'>");
            out.println("<link rel='stylesheet' href='/css/reset.css' type='text/css' media='all'> ");
            out.println("<link rel='stylesheet' href='/css/style.css' type='text/css' media='all'>");
    out.println("</head>");
    out.println("<body>");
        out.println("<div class='bg1'>");
            out.println("<div class='main'>");
            out.println("<header>");
                out.println("<nav>");
                    out.println("<ul id='menu'>");
                        out.println("<li><a href='/index.html'>Acceuil</a></li>");
                        out.println("<li class='active'><a href='#'>Programme</a></li>");
                    out.println("</ul>");
                out.println(" </nav>");
                out.println("<table border='0'>");
                out.println("<tr>");
                out.println("<td rowspan='2'><h1><a href='/index.html' ><img src='/images/iBody/zizacoeur.png' alt='logo' title='ZizaLpiG3 Acceuil'/></a></h1></td>");
                out.println("<td width='1000'>   </td>");
                out.println("<td><li></li>");
                    out.println("<li></li>");
                    out.println("<li><span class='ko'>&lt;audio&gt; non supportée !</span></audio><br/><br/></li></td>");
                out.println("</tr>");
                out.println("</table>");
            out.println("</header>");*/
            //<!---- FIN ENTETE ---->

            out.println("<div style='margin: 0 auto; width: 950px; background:url(../images/iBody/bg_content.png) repeat; padding:40px 46px 50px 49px; overflow:hidden'>");

      // on charge la base de donnees dabord
                out.println("<table width='70%' cellspacing='0' celladding='0' border='0'   align='center' >");
                out.println("<tr>");
                for(int i=0; i<10; i++){
                    out.println("<td height='300' width='300' valign='top' style='color:white'> date "+i+"</br> <img src='/images/lesAffiches/affiche.jpg' heigthalt='exemple' style='box-shadow:1 1 30px 10px grey;'/></br>Titre </br> Infos </br>Selection</br>Reseserver  </td>");
                    if((i+1)%4 == 0){
                        out.println("</tr>");
                        out.println("<tr><td colspan='4' align='center' heigth='50'></td></tr>");
                        out.println("<tr>");
                    }
                    if(i==9){
                        out.println("</tr>");
                    }
                }
                out.println("</table>");

            out.println("</div>");

	  // TO DO
	  // Récupération de la liste de tous les spectacles de la saison.
	  // Puis construction dynamique d'une page web décrivant ces spectacles.

        out.println("<footer>");
	           out.println("<hr><p><font color=\"#FFFFFF\"><a href=\"/index.html\">Accueil</a></p>");
        out.println("<b><font> <center>copyright&copy; Leopold Aziz GUEYE, Abdoul Razak HASSIMINI Annee academique:2014/2015.</center></font></b>");
        out.println("</footer>");
        //<!----- FIN DE PIEDS DE PAGE ------->   
	  
        //out.println("</div>");
        //out.println("</div>");
      out.println("</BODY>");
	  out.close();

    }

   /**
    * HTTP POST request entry point.
    *
    * @param req	an HttpServletRequest object that contains the request 
    *			the client has made of the servlet
    * @param res	an HttpServletResponse object that contains the response 
    *			the servlet sends to the client
    *
    * @throws ServletException   if the request for the POST could not be handled
    * @throws IOException	   if an input or output error is detected 
    *					   when the servlet handles the POST request
    */
    public void doPost(HttpServletRequest req, HttpServletResponse res)
	throws ServletException, IOException
    {
	  doGet(req, res);
    }


   /**
    * Returns information about this servlet.
    *
    * @return String information about this servlet
    */

    public String getServletInfo() {
        return "Retourne le programme du théatre";
    }

}
