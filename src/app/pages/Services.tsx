import { Link } from "react-router";
import { Button } from "../components/ui/button";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "../components/ui/card";
import { Tabs, TabsContent, TabsList, TabsTrigger } from "../components/ui/tabs";
import { 
  FileCheck, 
  Wrench, 
  Users, 
  GraduationCap, 
  Search, 
  Code,
  FileText,
  Shield,
  CheckCircle,
  BookOpen
} from "lucide-react";

export function Services() {
  const services = [
    {
      id: "testing",
      icon: <FileCheck className="w-12 h-12 text-blue-600" />,
      title: "Accessibility Testing",
      shortDesc: "Comprehensive evaluation of your digital products",
      description: "Our expert team conducts thorough accessibility audits using both automated tools and manual testing to ensure WCAG compliance.",
      features: [
        "WCAG 2.1 & 2.2 Compliance Testing",
        "Automated and Manual Testing",
        "Screen Reader Compatibility",
        "Keyboard Navigation Testing",
        "Color Contrast Analysis",
        "Detailed Reporting with Recommendations"
      ]
    },
    {
      id: "remediation",
      icon: <Wrench className="w-12 h-12 text-blue-600" />,
      title: "Remediation Services",
      shortDesc: "Expert fixes to make your content accessible",
      description: "We don't just identify issues—we fix them. Our remediation services ensure your digital products meet accessibility standards.",
      features: [
        "Code-Level Fixes",
        "Content Remediation",
        "Document Accessibility (PDFs, etc.)",
        "Alternative Text Creation",
        "ARIA Implementation",
        "Ongoing Support & Maintenance"
      ]
    },
    {
      id: "consultation",
      icon: <Users className="w-12 h-12 text-blue-600" />,
      title: "Accessibility Consultation",
      shortDesc: "Strategic guidance for your accessibility journey",
      description: "Get expert advice on implementing accessibility best practices throughout your organization and development lifecycle.",
      features: [
        "Accessibility Strategy Development",
        "Design System Accessibility Review",
        "Procurement Guidance",
        "Policy Development",
        "Workflow Integration",
        "Vendor Management Support"
      ]
    },
    {
      id: "training",
      icon: <GraduationCap className="w-12 h-12 text-blue-600" />,
      title: "Training & Workshops",
      shortDesc: "Empower your team with accessibility knowledge",
      description: "Comprehensive training programs designed for developers, designers, content creators, and stakeholders.",
      features: [
        "Developer Training",
        "Designer Workshops",
        "Content Creator Seminars",
        "Executive Awareness Sessions",
        "Custom Curriculum Development",
        "Certification Programs"
      ]
    }
  ];

  const additionalServices = [
    {
      icon: <Search className="w-8 h-8 text-blue-600" />,
      title: "Accessibility Audits",
      description: "Comprehensive evaluation of your entire digital ecosystem"
    },
    {
      icon: <Code className="w-8 h-8 text-blue-600" />,
      title: "Development Support",
      description: "Embedded accessibility expertise for your development team"
    },
    {
      icon: <FileText className="w-8 h-8 text-blue-600" />,
      title: "Documentation Review",
      description: "Ensure all your documents meet accessibility standards"
    },
    {
      icon: <Shield className="w-8 h-8 text-blue-600" />,
      title: "Compliance Monitoring",
      description: "Ongoing monitoring to maintain accessibility compliance"
    },
    {
      icon: <CheckCircle className="w-8 h-8 text-blue-600" />,
      title: "Quality Assurance",
      description: "Accessibility QA integrated into your testing process"
    },
    {
      icon: <BookOpen className="w-8 h-8 text-blue-600" />,
      title: "Accessibility Roadmap",
      description: "Strategic planning for long-term accessibility success"
    }
  ];

  return (
    <div>
      {/* Hero Section */}
      <section className="bg-gradient-to-br from-blue-50 to-indigo-50 py-20">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
          <h1 className="text-4xl md:text-5xl mb-6">Our Services</h1>
          <p className="text-xl text-gray-600 max-w-3xl mx-auto">
            Comprehensive accessibility solutions to ensure your digital products are inclusive, compliant, and user-friendly for everyone.
          </p>
        </div>
      </section>

      {/* Main Services */}
      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <Tabs defaultValue="testing" className="w-full">
            <TabsList className="grid w-full grid-cols-2 lg:grid-cols-4 mb-12">
              <TabsTrigger value="testing">Testing</TabsTrigger>
              <TabsTrigger value="remediation">Remediation</TabsTrigger>
              <TabsTrigger value="consultation">Consultation</TabsTrigger>
              <TabsTrigger value="training">Training</TabsTrigger>
            </TabsList>

            {services.map((service) => (
              <TabsContent key={service.id} value={service.id} className="space-y-8">
                <div className="grid md:grid-cols-2 gap-12 items-start">
                  <div>
                    <div className="mb-6">{service.icon}</div>
                    <h2 className="text-3xl mb-4">{service.title}</h2>
                    <p className="text-lg text-gray-600 mb-6">{service.description}</p>
                    <Button asChild size="lg">
                      <Link to="/contact">Request a Quote</Link>
                    </Button>
                  </div>
                  <Card>
                    <CardHeader>
                      <CardTitle>What's Included</CardTitle>
                    </CardHeader>
                    <CardContent>
                      <ul className="space-y-3">
                        {service.features.map((feature, index) => (
                          <li key={index} className="flex items-start gap-3">
                            <CheckCircle className="w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5" />
                            <span>{feature}</span>
                          </li>
                        ))}
                      </ul>
                    </CardContent>
                  </Card>
                </div>
              </TabsContent>
            ))}
          </Tabs>
        </div>
      </section>

      {/* Additional Services */}
      <section className="py-20 bg-gray-50">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center mb-12">
            <h2 className="text-3xl md:text-4xl mb-4">Additional Services</h2>
            <p className="text-xl text-gray-600 max-w-2xl mx-auto">
              Specialized offerings to support your accessibility initiatives
            </p>
          </div>
          <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            {additionalServices.map((service, index) => (
              <Card key={index} className="hover:shadow-lg transition-shadow">
                <CardHeader>
                  <div className="mb-4">{service.icon}</div>
                  <CardTitle>{service.title}</CardTitle>
                </CardHeader>
                <CardContent>
                  <CardDescription>{service.description}</CardDescription>
                </CardContent>
              </Card>
            ))}
          </div>
        </div>
      </section>

      {/* Process Section */}
      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center mb-12">
            <h2 className="text-3xl md:text-4xl mb-4">Our Process</h2>
            <p className="text-xl text-gray-600 max-w-2xl mx-auto">
              A streamlined approach to accessibility excellence
            </p>
          </div>
          <div className="grid md:grid-cols-4 gap-8">
            {[
              { step: "01", title: "Discovery", description: "We learn about your needs, goals, and current accessibility status" },
              { step: "02", title: "Assessment", description: "Comprehensive evaluation using automated tools and manual testing" },
              { step: "03", title: "Implementation", description: "We fix issues or guide your team through remediation" },
              { step: "04", title: "Verification", description: "Final testing and validation to ensure compliance" }
            ].map((item, index) => (
              <div key={index} className="text-center">
                <div className="text-5xl text-blue-600 mb-4">{item.step}</div>
                <h3 className="font-semibold text-xl mb-2">{item.title}</h3>
                <p className="text-gray-600">{item.description}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* CTA Section */}
      <section className="py-20 bg-blue-600 text-white">
        <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
          <h2 className="text-3xl md:text-4xl mb-6">
            Let's Discuss Your Accessibility Needs
          </h2>
          <p className="text-xl mb-8 text-blue-100">
            Every project is unique. Contact us for a customized solution.
          </p>
          <Button asChild size="lg" variant="secondary">
            <Link to="/contact">Get in Touch</Link>
          </Button>
        </div>
      </section>
    </div>
  );
}
