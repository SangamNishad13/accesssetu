import { Link } from "react-router";
import { Button } from "../components/ui/button";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "../components/ui/card";
import { Target, Eye, Heart, Award, Users, Zap } from "lucide-react";
import { ImageWithFallback } from "../components/figma/ImageWithFallback";

export function About() {
  const values = [
    {
      icon: <Eye className="w-8 h-8 text-blue-600" />,
      title: "Inclusion First",
      description: "We believe everyone deserves equal access to digital content and services."
    },
    {
      icon: <Heart className="w-8 h-8 text-blue-600" />,
      title: "Empathy",
      description: "We approach every project with empathy for users of all abilities."
    },
    {
      icon: <Award className="w-8 h-8 text-blue-600" />,
      title: "Excellence",
      description: "We maintain the highest standards in accessibility testing and remediation."
    },
    {
      icon: <Users className="w-8 h-8 text-blue-600" />,
      title: "Collaboration",
      description: "We work closely with clients to build sustainable accessibility practices."
    },
    {
      icon: <Zap className="w-8 h-8 text-blue-600" />,
      title: "Innovation",
      description: "We stay ahead of emerging standards and technologies in accessibility."
    },
    {
      icon: <Target className="w-8 h-8 text-blue-600" />,
      title: "Results-Driven",
      description: "We focus on measurable outcomes and lasting accessibility improvements."
    }
  ];

  const team = [
    {
      name: "Sarah Johnson",
      role: "Founder & CEO",
      description: "WCAG certified specialist with 15+ years in digital accessibility"
    },
    {
      name: "Michael Chen",
      role: "Lead Accessibility Consultant",
      description: "Expert in assistive technologies and ARIA implementation"
    },
    {
      name: "Emily Rodriguez",
      role: "Head of Training",
      description: "Passionate educator with experience training Fortune 500 companies"
    },
    {
      name: "David Kim",
      role: "Senior Developer",
      description: "Full-stack developer specializing in accessible web applications"
    }
  ];

  return (
    <div>
      {/* Hero Section */}
      <section className="bg-gradient-to-br from-blue-50 to-indigo-50 py-20">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid md:grid-cols-2 gap-12 items-center">
            <div>
              <h1 className="text-4xl md:text-5xl mb-6">About Access Setu Technologies</h1>
              <p className="text-xl text-gray-600 mb-6">
                We're on a mission to make the digital world accessible to everyone, regardless of their abilities.
              </p>
              <p className="text-lg text-gray-600 mb-8">
                Access Setu Technologies helps organizations worldwide create inclusive digital experiences. "Setu" means bridge in Sanskrit—we bridge the gap between technology and accessibility.
              </p>
              <Button asChild size="lg">
                <Link to="/contact">Work With Us</Link>
              </Button>
            </div>
            <div>
              <ImageWithFallback
                src="https://images.unsplash.com/photo-1763739527737-e3626d731072?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxwcm9mZXNzaW9uYWwlMjBjb25zdWx0aW5nJTIwbWVldGluZ3xlbnwxfHx8fDE3NzM1NTg4NTh8MA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral"
                alt="Professional consultation meeting"
                className="rounded-lg shadow-xl w-full"
              />
            </div>
          </div>
        </div>
      </section>

      {/* Mission & Vision */}
      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid md:grid-cols-2 gap-12">
            <Card>
              <CardHeader>
                <div className="mb-4">
                  <Target className="w-12 h-12 text-blue-600" />
                </div>
                <CardTitle className="text-2xl">Our Mission</CardTitle>
              </CardHeader>
              <CardContent>
                <p className="text-gray-600">
                  To empower organizations to create digital products that are accessible to all users, ensuring compliance with international standards while delivering exceptional user experiences.
                </p>
              </CardContent>
            </Card>
            <Card>
              <CardHeader>
                <div className="mb-4">
                  <Eye className="w-12 h-12 text-blue-600" />
                </div>
                <CardTitle className="text-2xl">Our Vision</CardTitle>
              </CardHeader>
              <CardContent>
                <p className="text-gray-600">
                  A world where digital accessibility is the standard, not the exception—where every person can access and interact with digital content without barriers.
                </p>
              </CardContent>
            </Card>
          </div>
        </div>
      </section>

      {/* Values */}
      <section className="py-20 bg-gray-50">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center mb-12">
            <h2 className="text-3xl md:text-4xl mb-4">Our Values</h2>
            <p className="text-xl text-gray-600 max-w-2xl mx-auto">
              The principles that guide our work and relationships
            </p>
          </div>
          <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            {values.map((value, index) => (
              <Card key={index} className="hover:shadow-lg transition-shadow">
                <CardHeader>
                  <div className="mb-4">{value.icon}</div>
                  <CardTitle>{value.title}</CardTitle>
                </CardHeader>
                <CardContent>
                  <CardDescription>{value.description}</CardDescription>
                </CardContent>
              </Card>
            ))}
          </div>
        </div>
      </section>

      {/* Team */}
      {/* <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center mb-12">
            <h2 className="text-3xl md:text-4xl mb-4">Meet Our Team</h2>
            <p className="text-xl text-gray-600 max-w-2xl mx-auto">
              Passionate experts dedicated to digital accessibility
            </p>
          </div>
          <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            {team.map((member, index) => (
              <Card key={index}>
                <CardHeader>
                  <div className="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                    <Users className="w-10 h-10 text-blue-600" />
                  </div>
                  <CardTitle className="text-center">{member.name}</CardTitle>
                  <CardDescription className="text-center text-blue-600">
                    {member.role}
                  </CardDescription>
                </CardHeader>
                <CardContent>
                  <p className="text-sm text-gray-600 text-center">
                    {member.description}
                  </p>
                </CardContent>
              </Card>
            ))}
          </div>
        </div>
      </section> */}

      {/* Stats */}
      {/* <section className="py-20 bg-blue-600 text-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center mb-12">
            <h2 className="text-3xl md:text-4xl mb-4">Our Impact</h2>
          </div>
          <div className="grid md:grid-cols-4 gap-8">
            {[
              { value: "500+", label: "Projects Delivered" },
              { value: "50+", label: "Enterprise Clients" },
              { value: "10K+", label: "Issues Resolved" },
              { value: "98%", label: "Client Satisfaction" }
            ].map((stat, index) => (
              <div key={index} className="text-center">
                <div className="text-4xl mb-2">{stat.value}</div>
                <div className="text-blue-100">{stat.label}</div>
              </div>
            ))}
          </div>
        </div>
      </section> */}

      {/* CTA */}
      <section className="py-20 bg-white">
        <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
          <h2 className="text-3xl md:text-4xl mb-6">
            Ready to Start Your Accessibility Journey?
          </h2>
          <p className="text-xl text-gray-600 mb-8">
            Let's work together to make your digital products accessible to everyone.
          </p>
          <Button asChild size="lg">
            <Link to="/contact">Contact Us</Link>
          </Button>
        </div>
      </section>
    </div>
  );
}