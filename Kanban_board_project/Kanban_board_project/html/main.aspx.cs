﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

using System.Data;
using System.Data.SqlClient;
using System.Configuration;
using Kanban_board_project;

namespace Kanban_board_project.html
{
    public partial class main : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            if (Session["user"] != null)
                Response.Redirect("Dashboard.aspx");
        }

        protected void Button1_Click(object sender, EventArgs e)
        {
            string userText = string.Format("{0}", Request.Form["user"]);
            string passText = string.Format("{0}", Request.Form["pass"]);

            if (userText.Length == 0 || passText.Length == 0)
            {
                Response.Redirect("main.aspx");
                return;
            }

            Kanban_board_project.management mm = new management();
            management mg = new management();

            if (mm.yaExiste(userText, passText))
            {
                Session["user"] = userText;
                Response.Redirect("Dashboard.aspx");
            }
            else
            {
                Response.Redirect("main.aspx");
                return;
            }
        }

        protected void Button1_Click(object sender, System.EventArgs e)
        {
            return default(void);
        }
    }
}