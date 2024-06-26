from diagrams import Diagram, Cluster, Node
from diagrams.aws.compute import EC2
from diagrams.aws.database import RDS
from diagrams.aws.network import ELB

with Diagram("Arquitectura de SMART PEOPLE LTI", show=False):
    elb = ELB("Load Balancer")

    with Cluster("Backend"):
        with Cluster("Cluster Web"):
            web = [EC2("web1"), EC2("web2"), EC2("web3")]

        with Cluster("Cluster de Base de Datos"):
            db_master = RDS("Master DB")
            db_master - [RDS("Replica DB1"), RDS("Replica DB2")]

    elb >> web
    web >> db_master